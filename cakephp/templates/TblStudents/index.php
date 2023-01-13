<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\TblStudent> $tblStudents
 */
?>
<div class="tblStudents index content">
    <?= $this->Html->link(__('New Tbl Student'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tbl Students') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('phone_no') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tblStudents as $tblStudent): ?>
                <tr>
                    <td><?= $this->Number->format($tblStudent->id) ?></td>
                    <td><?= h($tblStudent->name) ?></td>
                    <td><?= h($tblStudent->email) ?></td>
                    <td><?= h($tblStudent->phone_no) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tblStudent->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tblStudent->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tblStudent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tblStudent->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
