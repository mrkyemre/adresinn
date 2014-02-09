<?php

/**
 * @var $this View
 */

?>



<?php


/*



    echo $this->Form->create();

    echo $this->Form->input('email',array('id'=>'email'));

    echo $this->Html->useTag('tagstart','div',array('id'=>'result'));

    echo $value;

    echo $this->Html->useTag('tagend','div');

    echo $this->Form->input('password');

    echo $this->Form->end();






    /*

    $data = $this->Js->get('#email')->seri



    $this->Js->get('#password')->event(
    'click',
    $this->Js->request(
        array('action' => 'Users', 'controller' => 'checkuser'),
        array(
            'update' => '#results',
            'data' => $data,
            'async' => true,


        )
    )
);
echo $this->Js->writeBuffer();

echo $data;

*/


/*
    //$data= $this->Js->get('#email')->serializeForm(array('isForm'=>true,'inline'=>true));

    $this->Js->get('#usercheckform')->event(

        'checkemail',

        $this->Js->request(

            array('action'=>'checkUser','controller'=>'Users'),

            array(

                'update'=>'#na',

                'data'=>$data,

                'async'=>true,

                'dataExpression'=>true,

                'method'=>'POST'

            )

        )

    );

    echo $this->Js->writeBuffer();
*/

?>




