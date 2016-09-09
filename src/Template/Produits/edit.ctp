<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $produit->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $produit->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Produits'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Marques'), ['controller' => 'Marques', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Marque'), ['controller' => 'Marques', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="produits form large-9 medium-8 columns content">
    <?= $this->Form->create($produit) ?>
    <fieldset>
        <legend><?= __('Edit Produit') ?></legend>
        <?php
            echo $this->Form->input('marque_id', ['options' => $marques]);
            echo $this->Form->input('Designation');
            echo $this->Form->input('PrixUnitaire');
            echo $this->Form->input('QteStock');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
