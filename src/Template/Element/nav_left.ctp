<ul class="nav nav-sidebar nav-left">  
    <?php $class = $this->request->controller == 'Dashboard' ? 'active' : ''; ?>
    <li class="<?= $class; ?>">
        <?= 
        $this->Html->link(
            '<span class="glyphicon glyphicon-stats" aria-hidden="true"></span>&nbsp;&nbsp;'.__('Dashboard'), 
            [
                //'prefix' => '', 
                'controller' => 'Dashboard', 
                'action' => 'index'
            ], 
            ['escape' => false]
        ); 
        ?>
    </li>
    
   
</ul>

<ul class="nav nav-sidebar nav-left">
    <?php $class = $this->request->controller == 'Users' ? 'active' : ''; ?>
    <li class="<?= $class; ?>">
        <?= 
        $this->Html->link(
            '<span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;'.__('Users'), 
            [
                //'prefix' => '', 
                'controller' => 'Users', 
                'action' => 'index'
            ], 
            ['escape' => false]
        ); 
        ?>
    </li>
    
    <?php $class = $this->request->controller == 'Groups' ? 'active' : ''; ?>
    <li class="<?= $class; ?>">
        <?= 
        $this->Html->link(
            '<span class="glyphicon glyphicon-knight" aria-hidden="true"></span>&nbsp;&nbsp;'.__('Groups'), 
            [
                //'prefix' => '', 
                'controller' => 'Groups', 
                'action' => 'index'
            ], 
            ['escape' => false]
        ); 
        ?>
    </li>
    
</ul>