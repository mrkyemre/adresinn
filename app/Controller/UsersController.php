<?php
/**
 * @var $this View
 */


/**
 * @property User $User
 */

class UsersController extends AppController{

    public $components = array('RequestHandler');

    //Check Email Address is Unique

    public function checkuser(){

        $this->autoRender=false;

        $this->User->unbindModel(array('hasMany'=>array('Advert')));

        $result = $this->User->find('first',array('conditions'=>array('email'=>$this->request->data['regemail'])));

            if(empty($result)){

                echo 'email uygun ';
            }else{
                echo 'email uygun degil';
            }

        }

    public function login(){

        if($this->request->is('post')){

            if($this->Auth->login() ){

                $this->redirect($this->Auth->loginRedirect);

            }else{

                $this->Session->setFlash('Username or Password incorrect');

            }
        }

    }

    Public function register(){

        $this->autoRender=false;

        if($this->request->is('post')){

            $this->User->create();

            $this->request->data['User']['role_id']=1;

            $username=$this->request->data['User']['email'];

            $pass = $this->request->data['User']['password'];

            $this->User->save($this->request->data);

            $this->Auth->login();

        }

        //$this->redirect(array('controller'=>'Profile','action'=>'index'));

    }

    public function isLoggedin(){


    }

    public function logout(){

        $this->redirect($this->Auth->logout());

    }

}


?>