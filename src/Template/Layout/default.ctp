<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('//cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css') ?>
    <?= $this->Html->css('//fonts.googleapis.com/icon?family=Material+Icons'); ?>
    <?= $this->Html->script('//code.jquery.com/jquery-3.1.1.min.js') ?>
    <?= $this->Html->script('//code.jquery.com/ui/1.12.1/jquery-ui.js') ?>
    <?= $this->Html->script('//cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js') ?>
    <?= $this->Html->css('sukima.css') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <?= $this->Element('header'); ?>
    <?= $this->Flash->render() ?>
    <div class='container'>
        <?= $this->fetch('content') ?>
    </div>
    <?= $this->Element('footer'); ?>
</body>
</html>
