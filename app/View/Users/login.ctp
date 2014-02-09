<?php

/**
 * @var $this View
 */


?>

<!--start: login-->
<div class="login">
    <div class="container ">
        <div class="row">
            <div class="col-md-7">
                <h1><strong>Kullanıcı</strong> Girişi</h1>
                <div class="space20"></div>
                <!--start: login form-->

                <form class="form-horizontal login-form" method="post" action="/project/users/login"  accept-charset="utf-8">

                    <fieldset>
                        <!-- Text input-->
                        <div class="control-group">
                            <div class="controls">
                                <input  type="email" id="textinput" name="data[User][email]" type="text" placeholder="Kullanıcı Adı" class="input-xlarge">

                            </div>
                        </div>
                        <!-- Password input-->
                        <div class="control-group">
                            <div class="controls">
                                <input id="passwordinput" name="data[User][password]" type="password" placeholder="Şifre" class="input-xlarge ">

                            </div>
                        </div>
                        <div class="control-group">
                            <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <p></p>
                            </div>
                        </div>
                        <div class="control-group">

                            <div class="controls">
                                <ul class="list-inline list-unstyled">
                                    <li><input type="checkbox" name="checkboxG1" id="checkboxG1" class="css-checkbox" />
                                        <label for="checkboxG1" class="css-label">Beni Hatırla</label></li>
                                    <li>
                                        <a href="#">Şifremi Unuttum</a>
                                </ul>

                            </div>
                        </div>
                        <!-- Button -->
                        <div class="control-group">
                            <div class="controls">
                                <button id="singlebutton" name="singlebutton" class="btn btn-custom pull-left" ><strong>Giriş</strong></button>

                            </div>
                        </div>
                    </fieldset>

                </form>

                <!--end: login form-->
            </div>


            <div class="col-md-5">
                <!--start: resigter user modal-->
                <h1 class="text-center">Hayallerindeki <strong>yeni adresin</strong> için<br> </h1>
                <div class="space20"></div>
                <p class="lead text-center">
                    <a href="#myModal" role="button" class="btn btn-lg btn-custom" data-toggle="modal"><strong>Hemen</strong> üye ol</a></p>

                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <form class="form-horizontal" id="UserRegisterForm" method="post">

                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h3 class="modal-title" id="myModalLabel"><strong>Kolay</strong> Üyelik</h3>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">

                                            <fieldset>
                                                <!--user name-->
                                                <div class="control-group">
                                                    <div class="controls">
                                                        <input id="user-name" name="data[User][firstname]" type="text" placeholder="Adınız" class="input-xlarge">
                                                    </div>
                                                </div>

                                                <!--user last name-->
                                                <div class="control-group">
                                                    <div class="controls">
                                                        <input id="user-name" name="data[User][lastname]" type="text" placeholder="Soyadınız" class="input-xlarge">
                                                    </div>
                                                </div>

                                                <!--user email-->
                                                <div class="control-group">
                                                    <div class="controls">
                                                        <input id="user-name" name="data[User][email]" type="text" placeholder="E-Posta Adresiniz" class="input-xlarge">
                                                    </div>
                                                </div>

                                                <!--user email-->
                                                <div class="control-group">
                                                    <div class="controls">
                                                        <input id="user-name" name="data[User][password]" type="password" placeholder="Şifreniz" class="input-xlarge">
                                                    </div>
                                                </div>

                                            </fieldset>

                                    </div>

                                  <div class="col-md-6 register">
                                        <ul class="list-unstyled text-center">
                                            <li><i class=" icon-location"></i></li>
                                            <li><h2>Yeni <strong>adresin</strong><br> için <strong>doğru</strong> yerdesin.</h2></li>
                                        </ul>
                                    </div>

                                </div>

                            </div>

                            <div class="modal-footer">
                                <div class="pull-left mt10 ml20"><input type="checkbox" name="checkboxG2" id="checkboxG2" class="css-checkbox" />
                                    <label for="checkboxG2" class="css-label">Üyelik sözleşmesini <a href="#" class="text-blue"><strong>okudum</strong> </a>kabul ediyorum.</label></li></div>
                                <div class="pull-rigt">
                                    <button class="btn btn-custom mt10 ml20"><strong>Üye Ol</strong></button></div>
                            </div>

                            </form>

                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div>

                <!--end: resigter user modal-->
            </div>
        </div>
    </div>
</div>
<!--end: login-->

<script type="text/javascript">



$(document).ready(function(){

    $("#UserRegisterForm").validate({

        rules:{

            "data[User][firstname]" : {required:true},
            "data[User][lastname]"  : {required:true},
            "data[User][email]"     : {required:true},
            "data[User][password]"  : {required:true}
        },

        messages:{

            'data[User][firstnam]'  : {required: "Lutfen adinizi girin"},
            'data[User][lastname]'  : {required: "Lutfen soyadinizi girin"},
            'data[User][email]'     : {required: "Lutfen eposta adresinizi girin"},
            'data[User][password]'  : {required: "Lutfen Sifrenizi girin"}

        },

        submitHandler: function(){

            var form=$("#UserRegisterForm").serialize();

            $.ajax({

                type:'POST',
                url:'/project/Users/register',
                data:form,

                success:function(){

                    window.location.href='/project/Profile/index';

                }

            });

    }


});
});

</script>

<!--end: Container-->
<div class="space30"></div>