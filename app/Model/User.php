<?php

/**
 * @var $this View
 */

?>

<?php

App::uses('Security', 'Utility', 'Auth', 'Controller/Component');

class User extends AppModel{

    public $hasMany = array('Property');

    public $validate = array(
            
            'firstname' => array(
                           'rule'=>'notEmpty',
                            'required'=>true,
                           'message'=>'Please enter your name'
                                ),  
            'lastname' => array(
                           'rule'=>'notEmpty',
                           'message'=>'Please enter your lastname'
                                ),
            'email'   => array(
                        'emailrule1'=>array(

                            'rule'=> 'isUnique',
                           'message'=>'this email is being used'),

                        'emailrule2'=>array(
                            'rule'=> 'notEmpty',
                           'message'=>'Please enter your email'
                                )),

            'role_id' => array(
                      'rule'=>'notEmpty'),


            'password' => array(
                           'rule'=>'notEmpty',
                           'message'=>'Please enter your password'
                               ),

            'passwordCombination' => array(
                           'rule'=>'notEmpty',
                           'message'=>'Please confirm your password'
                               )
    );



public function beforeSave($options =array()){

    if(isset($this->data['User']['password'])){

        $this->data['User']['password'] =  AuthComponent::password($this->data['User']['password']);
    }
    
    return true;
    
}}


?>