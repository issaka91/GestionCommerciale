<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fournisseur'), ['action' => 'edit', $fournisseur->NumFss]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fournisseur'), ['action' => 'delete', $fournisseur->NumFss], ['confirm' => __('Are you sure you want to delete # {0}?', $fournisseur->NumFss)]) ?> </li>
        <li><?= $this->Html->link(__('List Fournisseurs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fournisseur'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="fournisseurs view large-9 medium-8 columns content">
    <h3><?= h($fournisseur->NumFss) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nif') ?></th>
            <td><?= h($fournisseur->Nif) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('NomFss') ?></th>
            <td><?= h($fournisseur->nomFss) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('AdresseFss') ?></th>
            <td><?= h($fournisseur->AdresseFss) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TelFss') ?></th>
            <td><?= h($fournisseur->TelFss) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('VilleFss') ?></th>
            <td><?= h($fournisseur->VilleFss) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PaysFss') ?></th>
            <td><?= h($fournisseur->PaysFss) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('NumFss') ?></th>
            <td><?= $this->Number->format($fournisseur->NumFss) ?></td>
        </tr>
    </table>
</div>
