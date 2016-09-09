<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $commande->NumCmd],
                ['confirm' => __('Are you sure you want to delete # {0}?', $commande->NumCmd)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Commandes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="commandes form large-9 medium-8 columns content">
    <?= $this->Form->create($commande) ?>
    <fieldset>
        <legend><?= __('Edit Commande') ?></legend>
        <?php
            echo $this->Form->input('NumFss');
            echo $this->Form->input('DateCmd', ['empty' => true]);
            echo $this->Form->input('delaiLiv');
            echo $this->Form->input('etatCmd');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
