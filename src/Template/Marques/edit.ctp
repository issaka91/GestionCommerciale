<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $marque->NumMarque],
                ['confirm' => __('Are you sure you want to delete # {0}?', $marque->NumMarque)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Marques'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="marques form large-9 medium-8 columns content">
    <?= $this->Form->create($marque) ?>
    <fieldset>
        <legend><?= __('Edit Marque') ?></legend>
        <?php
            echo $this->Form->input('LibMarque');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
