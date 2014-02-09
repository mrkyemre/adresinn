<?php

/**
 * @var $this View
 */

?>

<!-- header -->
<div class="navbar-wrapper header">
    <div class="container">
        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
            <div class="container">
                <!-- logo-->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>


                    <?php

                    echo $this->Html->link($this->Html->image('adresin-logo.png'),'/',array('escape'=> false,'class'=>'navbar-brand'));

               ?>


                </div>
                <!-- end: logo-->

                <?php if($this->Session->check('Auth.User')) {

                    echo $this->element('loggedinUser');

                }else{

                    ?>

                    <!-- notlogin user menu -->
                    <div class="navbar-collapse collapse ">

                        <ul class="nav navbar-nav pull-right">
                            <li><?php echo $this->Html->link('Kaydol',array('controller'=>'Users','action'=>'login'));?> </li>
                            <li> <?php echo $this->Html->link('Giris Yap',array('controller'=>'Users','action'=>'login'));?></a></li>
                        </ul>

                    </div>
                    <!-- end: notlogin user menu -->


                <?php


                }
                ?>



            </div>
        </div>
    </div>
</div>
<!-- end: header -->











