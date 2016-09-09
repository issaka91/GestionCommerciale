<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Fournisseur'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fournisseurs index large-9 medium-8 columns content">
    <h3><?= __('Fournisseurs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('NumFss') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nif') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nomFss') ?></th>
                <th scope="col"><?= $this->Paginator->sort('AdresseFss') ?></th>
                <th scope="col"><?= $this->Paginator->sort('TelFss') ?></th>
                <th scope="col"><?= $this->Paginator->sort('VilleFss') ?></th>
                <th scope="col"><?= $this->Paginator->sort('PaysFss') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($fournisseurs as $fournisseur): ?>
            <tr>
                <td><?= $this->Number->format($fournisseur->NumFss) ?></td>
                <td><?= h($fournisseur->Nif) ?></td>
                <td><?= h($fournisseur->nomFss) ?></td>
                <td><?= h($fournisseur->AdresseFss) ?></td>
                <td><?= h($fournisseur->TelFss) ?></td>
                <td><?= h($fournisseur->VilleFss) ?></td>
                <td><?= h($fournisseur->PaysFss) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $fournisseur->NumFss]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fournisseur->NumFss]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fournisseur->NumFss], ['confirm' => __('Are you sure you want to delete # {0}?', $fournisseur->NumFss)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
