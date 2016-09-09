<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Commande'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="commandes index large-9 medium-8 columns content">
    <h3><?= __('Commandes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('NumCmd') ?></th>
                <th scope="col"><?= $this->Paginator->sort('NumFss') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DateCmd') ?></th>
                <th scope="col"><?= $this->Paginator->sort('delaiLiv') ?></th>
                <th scope="col"><?= $this->Paginator->sort('etatCmd') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($commandes as $commande): ?>
            <tr>
                <td><?= h($commande->NumCmd) ?></td>
                <td><?= $this->Number->format($commande->NumFss) ?></td>
                <td><?= h($commande->DateCmd) ?></td>
                <td><?= h($commande->delaiLiv) ?></td>
                <td><?= h($commande->etatCmd) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $commande->NumCmd]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $commande->NumCmd]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $commande->NumCmd], ['confirm' => __('Are you sure you want to delete # {0}?', $commande->NumCmd)]) ?>
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
