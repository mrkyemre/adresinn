<?php
/**
 * Created by PhpStorm.
 * User: emrekaya
 * Date: 1/1/14
 * Time: 11:15 PM
 */


App::uses('Security', 'Utility');

class Advert extends AppModel{

    public $belongsTo = array('User'=>array('className'=>'User',
                                            'foreignKey'=>'aowner'
    ));



    public $validate = array(

        'atype' => array(
            'rule'=>'notEmpty',
            'required'=>true,
            'message'=>'Please enter the ad type'
        ),

        'aheading' => array(
            'rule'=>'notEmpty',
            'required'=>true,
            'message'=>'Please enter the heading'
        ),

        'adesc' => array(
            'rule'=>'notEmpty',
            'required'=>true,
            'message'=>'Please enter the desc'
        ),

        'aprice' => array(
            'rule'=>'notEmpty',
            'required'=>true,
            'message'=>'Please enter the price'
        )


    );



}