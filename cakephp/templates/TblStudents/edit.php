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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tblStudent->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tblStudent->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Tbl Students'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tblStudents form content">
            <?= $this->Form->create($tblStudent) ?>
            <fieldset>
                <legend><?= __('Edit Tbl Student') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('email');
                    echo $this->Form->control('phone_no');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
