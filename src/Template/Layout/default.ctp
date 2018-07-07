<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "TECHWEEK" ?>
    </title>
    <?= $this->Html->css('bootstrap.css') ?> 
    <?= $this->Html->css('layout.css') ?> 

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <?php require('Menu/menualunos.ctp'); ?>
    <?= $this->Flash->render() ?>
    <div class="container">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
    <?= $this->Html->script('/webroot/js/jquery.js'); ?> 
    <?= $this->Html->script('/webroot/js/bootstrap.js'); ?>
</body>
</html>
