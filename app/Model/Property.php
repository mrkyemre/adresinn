<?php
/**
 * Created by PhpStorm.
 * User: emrekaya
 * Date: 1/1/14
 * Time: 11:15 PM
 */


App::uses('Security', 'Utility');

class Property extends AppModel{


    var $useTable='property';

    public $belongsTo = array('User'=>array('className'=>'User',
                                              'foreignKey'=>'aowner'),

                              'County'=>array('className'=>'County',
                                              'foreignKey'=>'acounty'),

                              'District'=>array('className'=>'District',
                                              'foreignKey'=>'adistrict')

    );

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