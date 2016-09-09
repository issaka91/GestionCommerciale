<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Commande'), ['action' => 'edit', $commande->NumCmd]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Commande'), ['action' => 'delete', $commande->NumCmd], ['confirm' => __('Are you sure you want to delete # {0}?', $commande->NumCmd)]) ?> </li>
        <li><?= $this->Html->link(__('List Commandes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Commande'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="commandes view large-9 medium-8 columns content">
    <h3><?= h($commande->NumCmd) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('NumCmd') ?></th>
            <td><?= h($commande->NumCmd) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('EtatCmd') ?></th>
            <td><?= h($commande->etatCmd) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('NumFss') ?></th>
            <td><?= $this->Number->format($commande->NumFss) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DateCmd') ?></th>
            <td><?= h($commande->DateCmd) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DelaiLiv') ?></th>
            <td><?= h($commande->delaiLiv) ?></td>
        </tr>
    </table>
</div>
