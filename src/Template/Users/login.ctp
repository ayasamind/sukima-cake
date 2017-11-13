<div class='row'>
    <div class="col s4"></div>
    <div class="col s4">
        <p>ログイン</p>
            <?= $this->Form->create() ?>
            <?= $this->Form->control('email') ?>
            <?= $this->Form->control('password') ?>
            <?= $this->Form->button('ログイン', ['class' => 'waves-effect waves-light btn']) ?>
            <?= $this->Form->end() ?>
    </div>
    <div class="col s4"></div>
</div>
