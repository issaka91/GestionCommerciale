<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Marque'), ['action' => 'edit', $marque->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Marque'), ['action' => 'delete', $marque->id], ['confirm' => __('Are you sure you want to delete # {0}?', $marque->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Marques'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Marque'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Produits'), ['controller' => 'Produits', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Produit'), ['controller' => 'Produits', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="marques view large-9 medium-8 columns content">
    <h3><?= h($marque->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('LibMarque') ?></th>
            <td><?= h($marque->LibMarque) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($marque->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Produits') ?></h4>
        <?php if (!empty($marque->produits)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Marque Id') ?></th>
                <th scope="col"><?= __('Designation') ?></th>
                <th scope="col"><?= __('PrixUnitaire') ?></th>
                <th scope="col"><?= __('QteStock') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($marque->produits as $produits): ?>
            <tr>
                <td><?= h($produits->id) ?></td>
                <td><?= h($produits->marque_id) ?></td>
                <td><?= h($produits->Designation) ?></td>
                <td><?= h($produits->PrixUnitaire) ?></td>
                <td><?= h($produits->QteStock) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Produits', 'action' => 'view', $produits->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Produits', 'action' => 'edit', $produits->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Produits', 'action' => 'delete', $produits->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produits->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
