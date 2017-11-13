<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Entry[]|\Cake\Collection\CollectionInterface $entries
 */
?>
<div class="row">
    <div class='col s9'>
        <p>投稿一覧</p>
            <?php foreach ($entries as $entry): ?>
                <div class='card'>

                            <?= $entry->user->has('image') ? $this->Html->image($entry->user->image,['action' => 'index']) : $this->Html->image('No-image-found.jpg', ['class' => 'circle view']) ?>

                            <?= $entry->has('user') ? $this->Html->link($entry->user->profile->name, ['controller' => 'Users', 'action' => 'view', $entry->user->id]) : '' ?>

                    <span class='card-title'><?= $this->Html->link($entry->title, ['action' => 'view', $entry->id],[ 'class' => 'title']) ?></span>
                    <div class='card-content'>
                        <?= $entry->has('category') ? $this->Html->link($entry->category->name, ['controller' => 'Categories', 'action' => 'view', $entry->category->id]) : '' ?>
                    </div>
                    <!-- <div class='card-action'></div> -->
                </div>
            <?php endforeach; ?>
    <ul class='pagination'>
        <?= $this->Paginator->first('<< ' . __('first')) ?>
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
        <?= $this->Paginator->last(__('last') . ' >>') ?>
    </ul>
    <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
    <div class='col s3'>
        <?= $this->Element('sidebar') ?>
    </div>
</div>
