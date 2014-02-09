<?php

/**
 * @var $this View
 */

?>


<div class="dropdown">
    <button class="btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
        <?php echo $this->Session->read('Auth.User.firstname'); ?>
        <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1" style="right:0; left: auto">
        <li role="presentation"><a role="menuitem" tabindex="-1" href="Profile/">ilanlarım</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Favori Ilanlarim</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Hesabim</a></li>
        <li role="presentation" class="divider"></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><?php  echo $this->Html->link('Cikis',array('controller'=>'Users','action'=>'logout'));?></a></li>
    </ul>
</div>