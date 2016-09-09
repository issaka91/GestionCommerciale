<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Fournisseurs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Commandes'), ['controller' => 'Commandes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Commande'), ['controller' => 'Commandes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fournisseurs form large-9 medium-8 columns content">
    <?= $this->Form->create($fournisseur) ?>
    <fieldset>
        <legend><?= __('Add Fournisseur') ?></legend>
        <?php
            echo $this->Form->input('Nif');
            echo $this->Form->input('nomFss');
            echo $this->Form->input('AdresseFss');
            echo $this->Form->input('TelFss');
            echo $this->Form->input('VilleFss');
            echo $this->Form->input('PaysFss');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
