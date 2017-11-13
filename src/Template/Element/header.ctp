<?php
    use App\Statics\UserInfo;
?>
<nav>
    <div class="nav-wrapper">
        <?= $this->Html->link('Sukima-career', ['controller' => 'entries', 'action' => 'index'], ['class' => 'brand-logo', 'escape' => false]) ?>
        <ul id='nav-mobile' class='right hide-on-med-and-down'>
            <?php if (!is_null(UserInfo::$id)) : ?>
                <li><?= $this->Html->link('学生登録', ['controller' => 'users', 'action' => 'add'], ['class' => '']) ?></li>
                <li><?= $this->Html->link('企業登録', ['controller' => 'admins', 'action' => 'add'], ['class' => '']) ?></li>
                <li><?= $this->Html->link('ログアウト', ['controller' => 'users', 'action' => 'logout'], ['class' => '']) ?></li>
            <?php else : ?>
                <li><?= $this->Html->link('ログイン', ['controller' => 'users', 'action' => 'login'], ['class' => '']) ?></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>
