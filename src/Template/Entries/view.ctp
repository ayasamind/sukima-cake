<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Entry $entry
 */
?>
<div class='row'>
    <div class='col s12'>
        <div class='card'>
            <p class='center'>
                <?= $entry->user->has('image') ? $this->Html->image($entry->user->image,['action' => 'index']) : $this->Html->image('No-image-found.jpg', ['class' => 'circlev small']) ?>
            </p>
            <p class='card-title center'><?= h($entry->title) ?></p>
            <div class='card-action'>

                <?= $entry->body ?>
            </div>
        </div>
    </div>
</div>
