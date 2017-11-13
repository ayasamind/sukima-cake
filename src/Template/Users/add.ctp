<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<h4>学生登録</h4>
<div class='ui form'>
    <?= $this->Form->create($user, ['type' => 'file']) ?>
    <div class='fields'>
        <div class='field'>
            <?= $this->Form->control('email', ['label' => 'メールアドレス', 'placeholder' => 'email']); ?>
        </div>
        <div class='field'>
            <?= $this->Form->control('password', ['label' => 'パスワード', 'placeholder' => 'password']); ?>
        </div>
    </div>
        <div class='field'>
            <?= $this->Form->control('profiles.photo',[
                'type' => 'file',
                'label' => 'プロフィール画像',
                'placeholder' => 'photo',
            ]); ?>
        </div>
    <div class='fields'>
        <div class='field'>
            <?= $this->Form->control('profiles.name', ['label' => '名前', 'placeholder' => 'name']); ?>
        </div>
        <label>性別</label>
        <p>
               <input name="sex" type="radio" id="sex-0" value='0' />
               <label for="sex-0">男性</label>
           </p>
           <p>
               <input name="sex" type="radio" id="sex-1" value='1' />
               <label for="sex-1">女性</label>
           </p>
    </div>
    <div class='fields'>
        <div class='field'>
            <?= $this->Form->control('profiles.university', ['label' => '大学名', 'placeholder' => 'university']); ?>
        </div>
        <div class='field'>
            <?= $this->Form->control('profiles.department', ['label' => '学部名', 'placeholder' => 'department']); ?>
        </div>
    </div>
    <div class='fields'>
        <div class='field'>
            <?= $this->Form->control('profiles.prefecture', ['label' => '働きたい県', 'placeholder' => 'prefecture']); ?>
        </div>
        <div class='field'>
            <?= $this->Form->control('profiles.skill', ['label' => 'スキル', 'placeholder' => 'skill']); ?>
        </div>
    </div>
    <div class='field'>
        <?= $this->Form->control('profiles.introduce', ['label' => '自己紹介', 'placeholder' => 'introduce']); ?>
    </div>
    <?= $this->Form->button(__('Submit'), ['class' => 'ui primary button']) ?>
    <?= $this->Form->end() ?>
</div>
