<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Entry[]|\Cake\Collection\CollectionInterface $entries
 */
?>
<div class="ui internally celled grid">
    <div class="twelve wide column">
        <div class="ui attached tabular menu">
            <a class="item active" data-tab="entries">投稿一覧 </a>
        </div>
        <div class="ui tab active" data-tab="entries">
            <?php foreach ($entries as $entry): ?>
                <div class="ui segment hover">
                    <?= $entry->has('category') ? $this->Html->link($entry->category->name, ['controller' => 'Categories', 'action' => 'view', $entry->category->id]) : '' ?>
                    <div class="ui avatar image">
                        <?= $entry->user->has('image') ? $this->Html->image($entry->user->image,['action' => 'index']) : $this->Html->image('No-image-found.jpg') ?>
                    </div>
                    <?= $entry->has('user') ? $this->Html->link($entry->user->profile->name, ['controller' => 'Users', 'action' => 'view', $entry->user->id]) : '' ?>
                    <div class="header">
                        <?= $this->Html->link($entry->title, ['action' => 'view', $entry->id],[ 'class' => 'title']) ?>
                    </div>
                </div>
            <?php endforeach; ?>
                <p>
                    <?= $this->Paginator->first('<< ' . __('first')) ?>
                    <?= $this->Paginator->prev('< ' . __('previous')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('next') . ' >') ?>
                    <?= $this->Paginator->last(__('last') . ' >>') ?></p>
                <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
        </div>
    </div>
    <div class="two wide column">
    </div>
</div>
