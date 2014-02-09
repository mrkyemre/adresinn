<?php

class County extends AppModel{


    var $useTable='countys';

    public $belongsTo = array('City'=>array('className'=>'City',
                                            'foreignKey'=>'countycityid'));







}


