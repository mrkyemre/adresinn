<?php
/**
 * @var $this View
 */?>
<!DOCTYPE html>
    <html lang="en" class=" clickberry-extension clickberry-extension-standalone">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="img/favicon.png">
        <title>Adresin.com</title>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>

        <?php
		echo $this->Html->meta('icon');
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');

        //Load CSS Files
        echo $this->Html->css('niagara');
        echo $this->Html->css('bootstrap');
        echo $this->Html->css('icoon-moon');
        echo $this->Html->css('jquery-ui.min');
        echo $this->Html->css('jquery.plupload.queue');

        //Load JS Files
        echo $this->Html->script('jquery-2.0.3.min');
        //echo $this->Html->script('jquery-ui.min');


        echo $this->Html->script('plupload.full.min');
        echo $this->Html->script('jquery.plupload.queue');


        ?>


    <!--[if lt IE 9 ]>
    <link href="css/styleIE.css" rel="stylesheet">
    <![endif]-->

    <!--[if IE 9 ]>
    <link href="css/styleIE9.css" rel="stylesheet">
    <![endif]-->

    <!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>

<?php

echo $this->element('header'); ?>

<div class="clearfix"></div>

<?php echo $this->fetch('content'); ?>

<hr>

<?php echo $this->element('footer'); ?>

<script type="javascript">
    $(document).ready(function(e) {
        $('.btnTab').click(function(){
            $('#welcome').removeClass().addClass($(this).data('rel'));
        });
    });
</script>

<?php echo $this->element('sql_dump'); ?>

<?php

//echo $this->Html->script('jquery-2.0.3.min');
echo $this->Html->script('holder');
echo $this->Html->script('bootstrap.min');
echo $this->Html->script('custom');
echo $this->Html->script('myfunc');
//echo $this->Html->script('jquery-ui.min');
echo $this->Html->script('jquery.validate.min');
//echo $this->Html->script('plupload.full.min');
//echo $this->Html->script('jquery.ui.plupload.min');






?>

</body>
</html>
