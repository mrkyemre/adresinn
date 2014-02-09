<?php


class District extends AppModel{

    var $useTable='districts';

public $belongsTo = array('County'=>array('className'=>'County',
                                         'foreignKey'=>'districtcountyid'));



}


?>