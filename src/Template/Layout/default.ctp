<?php
use Cake\Core\Configure;
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
        <title><?= Configure::read('Project.titleLayout')." ".$this->fetch('title') ?></title>
        <?= $this->element('load_top'); ?>
    </head>
    <body>
        <?= $this->element('nav_top'); ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar">
                    <?= $this->element('nav_left'); ?>
                </div>
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                    <?= $this->Flash->render() ?>
                    <?= $this->fetch('content') ?>
                    <footer><i><?= Configure::read('Project.textFooter'); ?></i></footer>
                </div>
            </div>
        </div>
        <?= $this->element('load_bottom'); ?>
    </body>
</html>