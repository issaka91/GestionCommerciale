<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Produits'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="produits form large-9 medium-8 columns content">
    <?= $this->Form->create($produit) ?>
    <fieldset>
        <legend><?= __('Add Produit') ?></legend>
        <?php
            echo $this->Form->input('NumMarque');
            echo $this->Form->input('Designation');
            echo $this->Form->input('PrixUnitaire');
            echo $this->Form->input('QteStock');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
