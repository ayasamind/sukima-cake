<div class="ui secondary pointing menu">
  <a class="active item">Home </a>
  <a class="item">Messages </a>
  <a class="item">友達 </a>
  <div class="right menu">
      <?= $this->Html->link('学生登録', ['controller' => 'users', 'action' => 'add'], ['class' => 'ui item']) ?>
      <?= $this->Html->link('企業登録', ['controller' => 'admins', 'action' => 'add'], ['class' => 'ui item']) ?>
      <?= $this->Html->link('ログアウト', ['controller' => 'users', 'action' => 'logout'], ['class' => 'ui item']) ?>
  </div>
</div>
