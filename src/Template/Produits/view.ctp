<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Produit'), ['action' => 'edit', $produit->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Produit'), ['action' => 'delete', $produit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produit->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Produits'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Produit'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Marques'), ['controller' => 'Marques', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Marque'), ['controller' => 'Marques', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="produits view large-9 medium-8 columns content">
    <h3><?= h($produit->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Marque') ?></th>
            <td><?= $produit->has('marque') ? $this->Html->link($produit->marque->id, ['controller' => 'Marques', 'action' => 'view', $produit->marque->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Designation') ?></th>
            <td><?= h($produit->Designation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('QteStock') ?></th>
            <td><?= h($produit->QteStock) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($produit->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PrixUnitaire') ?></th>
            <td><?= $this->Number->format($produit->PrixUnitaire) ?></td>
        </tr>
    </table>
</div>
