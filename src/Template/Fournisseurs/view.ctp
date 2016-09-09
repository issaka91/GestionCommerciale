<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fournisseur'), ['action' => 'edit', $fournisseur->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fournisseur'), ['action' => 'delete', $fournisseur->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fournisseur->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fournisseurs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fournisseur'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Commandes'), ['controller' => 'Commandes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Commande'), ['controller' => 'Commandes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="fournisseurs view large-9 medium-8 columns content">
    <h3><?= h($fournisseur->id) ?></h3>
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
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($fournisseur->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Commandes') ?></h4>
        <?php if (!empty($fournisseur->commandes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Fournisseur Id') ?></th>
                <th scope="col"><?= __('DateCmd') ?></th>
                <th scope="col"><?= __('DelaiLiv') ?></th>
                <th scope="col"><?= __('EtatCmd') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($fournisseur->commandes as $commandes): ?>
            <tr>
                <td><?= h($commandes->id) ?></td>
                <td><?= h($commandes->fournisseur_id) ?></td>
                <td><?= h($commandes->DateCmd) ?></td>
                <td><?= h($commandes->delaiLiv) ?></td>
                <td><?= h($commandes->etatCmd) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Commandes', 'action' => 'view', $commandes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Commandes', 'action' => 'edit', $commandes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Commandes', 'action' => 'delete', $commandes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $commandes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
