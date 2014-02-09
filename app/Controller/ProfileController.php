<?php

/**
 * @var $this View
 */



class ProfileController extends AppController
{

    var $uses=array('Property');

    public function index(){

    }

    public function userAccount(){

        $this->autoRender=false;

        $this->render('user_acc','ajax');

    }

}

?>