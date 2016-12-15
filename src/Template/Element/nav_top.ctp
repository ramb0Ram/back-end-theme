<?php
use Cake\Core\Configure;
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?= Configure::read('Project.name'); ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <?php if($this->request->session()->check('Auth.User')): ?>
                <ul class="nav navbar-nav navbar-right">
                    <li><p class="navbar-text">Signed in as "<?php echo $this->request->session()->read('Auth.User.name');?>"</p></li>
                    <li>
                        <?= 
                        $this->Html->link(
                            __('Logout'), 
                            [
                                'prefix' => false , 
                                'controller' => 
                                'Users', 
                                'action' => 'logout'
                            ]
                        ); 
                        ?>
                    </li>
                </ul>
            <?php endif; ?>
            <!--
            <form class="navbar-form navbar-right">
                <input type="text" class="form-control" placeholder="Search...">
            </form>
            -->
        </div>
    </div>
</nav>