<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Produit'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="produits index large-9 medium-8 columns content">
    <h3><?= __('Produits') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('NumProd') ?></th>
                <th scope="col"><?= $this->Paginator->sort('NumMarque') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Designation') ?></th>
                <th scope="col"><?= $this->Paginator->sort('PrixUnitaire') ?></th>
                <th scope="col"><?= $this->Paginator->sort('QteStock') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produits as $produit): ?>
            <tr>
                <td><?= $this->Number->format($produit->NumProd) ?></td>
                <td><?= $this->Number->format($produit->NumMarque) ?></td>
                <td><?= h($produit->Designation) ?></td>
                <td><?= $this->Number->format($produit->PrixUnitaire) ?></td>
                <td><?= h($produit->QteStock) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $produit->NumProd]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $produit->NumProd]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $produit->NumProd], ['confirm' => __('Are you sure you want to delete # {0}?', $produit->NumProd)]) ?>
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
