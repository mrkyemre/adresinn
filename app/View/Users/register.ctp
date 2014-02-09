<?php

/**
 * @var $this View
 */

?>
    <h2>Kayit</h2>

<?php


    echo $this->Html->useTag('tagstart','div',array('class'=>'col-md-4'));

    echo $this->Session->flash();

    echo $this->Form->create('',array('class'=>'form-horizontal','role'=>'form','novalidate','inputDefaults'=>array(

                      'div'=>array('class'=>'form-group'),

                      'class'=>'form-control')));

    echo $this->Form->input('firstname',array('label'=>'Isım'));



    echo $this->Form->input('lastname',array('label'=>'Soyisim'));

    echo $this->Form->input('email',array('label'=>'E-mail','id'=>'email'));

    echo $this->Html->useTag('tagstart','div',array('class'=>'col-md-8 required','id'=>'result'));

    echo $this->Html->useTag('tagend','div');

    echo $this->Form->input('password',array('id'=>'password'));

    echo $this->Form->input('passwordCombination',array('label'=>'Sifre'));

    //echo $this->Html->useTag('tagstart','div',array('class'=>'col-md-8 required'));

    echo $this->Form->submit('Save',array('class'=>'btn btn-primary'));

    //echo $this->Html->useTag('tagend','div');

    echo $this->Form->end();

    echo $this->Html->useTag('tagend','div');


?>

<script type="text/javascript">

    $(document).ready(function(){

        $('#email').change(function(){

                var email = $('#email').val();


                $.post('../Users/checkuser',{email:email},function(datam){

                        $('#result').html(datam);

                    } )})})

</script>