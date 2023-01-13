<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TblStudent $tblStudent
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tbl Student'), ['action' => 'edit', $tblStudent->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tbl Student'), ['action' => 'delete', $tblStudent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tblStudent->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tbl Students'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tbl Student'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tblStudents view content">
            <h3><?= h($tblStudent->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($tblStudent->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($tblStudent->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone No') ?></th>
                    <td><?= h($tblStudent->phone_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($tblStudent->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
