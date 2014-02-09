<?php

/**
 * @var $this View
 */

?>

<div class="clearfix"></div>

<div class="space20"></div>
<!--start: user account header -->
<div class="user-account-header">
    <!--start: user account menu-->
    <div class="container">
        <ul class="navs list-inline">
            <li id="ilan" class="active"> <i class="icon-star3"></i><br> <a href="#adverts" data-toggle="tab">İlanlarim</a></li>
            <li> <i class="icon-star3"></i><br> <a href="#favori" data-toggle="tab">Favori İlanlarım</a></li>
            <li> <i class="icon-mail6"></i><br> <a href="#mesajlarim" data-toggle="tab">Mesajlarım</a></li>
            <li> <i class="icon-user3"></i><br> <a href="#hesap" data-toggle="tab">Hesap Bilgilerim</a></li>
        </ul>
    </div>
    <!--end: user account menu-->
</div>
<!--start: end account header -->


<!--start: user account content-->
<div class="container user-account-content">

<!--start: tabs-->
<div class="tab-content">

    <!--start: user adverts-->
    <div class="tab-pane active fade in" id="adverts">
        <div class="container">

            <div class="row">
                <div class="col-md-10"><h2 class="pull-left"><strong>İlanlarim</strong></h2></div>
                <div class="col-md-2"><a href="#ilanekle1" data-toggle="tab"><button id="buttonAddProperty" name="button1id" class="btn btn-custom pull-right mt10"><strong><i class="icon-plus3"></i> <strong>İlan</strong> Ekle</strong></button></a></div>
            </div>
            <hr>

            <div class="listadverts">
                <div class="row" id="listadverts">

                </div>
            </div>

        </div>
    </div>
    <!--end: user adverts-->

    <!--start: user account info-->
    <div class="tab-pane fade in" id="hesap">
        <div class="container">
            <div class="row">
                <div class="col-md-10"><h2 class="pull-left"><strong>Hesap</strong> Bilgilerim</h2></div>
                <div class="col-md-2"><button id="button1id" name="button1id" class="btn btn-custom pull-right mt10"><strong><i class="icon-pencil"></i> Düzenle</strong></button></div>

            </div>
            <hr>

            <div class="row">
                <div class="col-md-11">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label for="ad" class="col-sm-1 control-label">Adınız</label>
                            <div class="col-sm-5">
                                <input type="email" class="form-control" id="ad" placeholder="Adınız">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="soyad" class="col-sm-1 control-label">Soyadınız</label>
                            <div class="col-sm-5">
                                <input type="soyad" class="form-control" id="soyad" placeholder="Soyadınız">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="eposta" class="col-sm-1 control-label">E-Posta</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="eposta" placeholder="E-posta">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-sm-1 control-label">Şifre</label>
                            <div class="col-sm-5">
                                <input type="password" class="form-control" id="inputPassword" placeholder="******">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword2" class="col-sm-1 control-label">Şifre </label>
                            <div class="col-sm-5">
                                <input type="password" class="form-control" id="inputPassword2" placeholder="******">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-1">
                    <img class="img-thumbnail" src="">
                </div>

            </div>

        </div>
    </div>
    <!--end: user account info-->

    <!--start: user fav-->
    <div class="tab-pane fade in" id="favori">
        <div class="container">


            <div class="row">
                <div class="col-md-10"><h2 class="pull-left"><strong>Favori</strong> İlanlarım</h2></div>
                <div class="col-md-2"></div>

            </div>
            <hr>
        </div>
    </div>
    <!--end: user fav-->

<?php echo $this->element('addProperty');?>

        </form>


    <script type="text/javascript">

        //Load City Data
        $(document).ready(function(){

            $('#buttonAddProperty').click(function(){

                $.ajax({

                    url:'/project/Propertys/startAdd'
                    });

                $.ajax({
                url:'/project/Propertys/loadCityData/',
                type:'GET',
                success:function(data){
                    $('#selectcity').html(data);}})})});

        //Load County Data
        $(document).ready(function(){
            $('#selectcity').click(function(){
                var selected = $('#selectcity').val();
                $.ajax({
                    url:'/project/Propertys/loadCountyData/',
                    type:'POST',
                    data:{selected:selected},
                    success:function(data){
                        $('#selectcounty').html(data);}})})});

        //Load District Data
        $(document).ready(function(){
            $('#selectcounty').click(function(){
                var selected = $('#selectcounty').val();
                $.ajax({
                    url:'/project/Propertys/loadDistrictData/',
                    type:'POST',
                    data:{selected:selected},
                    success:function(data){
                        $('#selectdistrict').html(data);}})})});

        $(document).ready(function(){

               $("#AdvertsAddForm").validate({

                   rules:{

                       'data[Property][atype]'       : {required:true},
                       'data[Property][acity]'       : {required:true},
                       'data[Property][acounty]'     : {required:true},
                       'data[Property][adistrict]'   : {required:true},
                   },

                   messages:{

                       'data[Property][atype]'       : {required: "Lutfen ev tipini seçin"},
                       'data[Property][acity]'       : {required: "Lutfen şehir seçin"},
                       'data[Property][acounty]'     : {required: "Lutfen ilçe seçin"},
                       'data[Property][adistrict]'   : {required: "Lutfen mahalle seçin"},

                   }

               });


            $('#button-next1').click(function(){

                if(!$('#selecttype').valid()){return false;}

                if(!$('#selectcity').valid()){return false;}

                if(!$('#selectcounty').valid()){return false;}

                if(!$('#selectdistrict').valid()){return false;}

            });

            $('#button-next2').click(function(){

            if(!$('#ilanbaslik').valid()){return false;}

            });

           });

            //Submit Form

        $(document).ready(function(){

            $('#buttonsubmit').click(function(){


                //Post the Form
                if($('#uploader_filelist').html()!='' && $('.plupload_total_status').html()=='100%'){

                        var form=$("#AdvertsAddForm").serialize();

                        $.ajax({

                            type:'POST',
                            url:'/project/Propertys/add',
                            data:form,

                            success:function(){

                                window.location.href='/project/Profile/index';

                            }
                        })

                    }else{

                    alert('upload some pics');

                }

            })

        });

           //Validate Form
        $(document).ready(function(){

            $("#AdvertsAddForm").validate({

                rules:{

                    'data[Advert][atype]'       : {required:true},
                    'data[Advert][acity]'       : {required:true},
                    'data[Advert][acounty]'     : {required:true},
                    'data[Advert][adistrict]'   : {required:true},
                    'data[Advert][aheading]'    : {required:true},
                    'data[Advert][adesc]'       : {required:true},
                    'data[Advert][am2]'         : {required:true},
                    'data[Advert][aroomnum]'    : {required:true},
                    'data[Advert][aprice]'      : {required:true},
                    'data[Advert][upload]'      : {required:true}


                },

                messages:{

                    'data[Advert][atype]'       : {required: "Lutfen ev tipini seçin"},
                    'data[Advert][acity]'       : {required: "Lutfen şehir seçin"},
                    'data[Advert][acounty]'     : {required: "Lutfen ilçe seçin"},
                    'data[Advert][adistrict]'   : {required: "Lutfen mahalle seçin"},
                    'data[Advert][aheading]'    : {required: "Lutfen ilan başlığı seçin"},
                    'data[Advert][adesc]'       : {required: "Lutfen ilan açıklaması girin"},
                    'data[Advert][am2]'         : {required: "Lutfen m2 degerinş girin"},
                    'data[Advert][aroomnum]'    : {required: "Lutfen oda sayisini girin "},
                    'data[Advert][aprice]'      : {required: "Lutfen fiyati girin"},
                    'data[Advert][upload]'      : {required: "Lutfen resim secin"}

                },


                    submitHandler: function(){

                    var form=$("#AdvertsAddForm").serialize();

                    $.ajax({

                        type:'POST',
                        url:'/project/Propertys/add',
                        data:form,

                        success:function(){

                            window.location.href='/project/Profile/index';

                        }

                    });

                }

            });
        });

        //Start Upload Process

        $(function() {

            // Setup html5 version
            $("#uploader").pluploadQueue({
                // General settings
                runtimes : 'html5,flash,silverlight,html4',
                url : '/project/Images/uploadImage',
                chunk_size: '1mb',
                rename : true,
                dragdrop: true,

                //Start Automatically
                init : {
                    FilesAdded: function(up, files) {
                        up.start();
                    }},


                filters : {
                    // Maximum file size
                    max_file_size : '10mb',
                    // Specify what files to browse for
                    mime_types: [
                        {title : "Image files", extensions : "jpg,gif,png"},
                        {title : "Zip files", extensions : "zip"}
                    ]
                },

                // Resize images on clientside if we can
                resize : {width : 320, height : 240, quality : 90},

                flash_swf_url : '../../js/Moxie.swf',
                silverlight_xap_url : '../../js/Moxie.xap'
            });

        });

    </script>

    <!--end: user new advert-->

    <!--start: user mail-->
    <div class="tab-pane fade in" id="mesajlarim">
        <div class="container message">


            <div class="row">
                <div class="col-md-10"><h2 class="pull-left"><strong>Mesajlarım</strong></h2></div>
                <div class="col-md-2"><button id="button1id" name="button1id" class="btn btn-custom pull-right mt10"><strong><i class="icon-plus3"></i> <strong>Yeni</strong> Mesaj</strong></button></div>
            </div>
            <hr>
            <ul class="list-unstyled list-inline clearfix">
                <div class="clearfix"></div>
                <li class="no-read">

                    <a href="#">
                        <div class="pull-left"><img src=""></div>
                        <div class="pull-left">
                            <div class="title"><strong>Al Pacino</strong></div>
                            <div class="desc">Benim için yanıp tutuşan bir şey varsa <br>oda sigaramdır..</div>
                            <small class="time">5sn önce</small>
                        </div>
                    </a>
                </li>
                <li class="no-read">

                    <a href="#">
                        <div class="pull-left"><img src=""></div>
                        <div class="pull-left">
                            <div class="title"><strong>Walter White</strong></div>
                            <div class="desc">Ben ne zaman bitti dersem, <br>o zaman biter</div>
                            <small class="time">5sn önce</small>
                        </div>
                    </a>
                </li>
                <li class="no-read">

                    <a href="#">
                        <div class="pull-left"><img src=""></div>
                        <div class="pull-left">
                            <div class="title"><strong>Sandra Bullock</strong></div>
                            <div class="desc">o telefonlara neden bakılmıyor acaba?</div>
                            <small class="time">5sn önce</small>
                        </div>
                    </a>
                </li>
                <li class="read">

                    <a href="#">
                        <div class="pull-left"><img src=""></div>
                        <div class="pull-left">
                            <div class="title"><strong>Sandra Bullock</strong></div>
                            <div class="desc">telefon sürekli meşgul?</div>
                            <small class="time">1 saat önce</small>
                        </div>
                    </a>
                </li>
            </ul>

        </div>
        <!--start: user mail-->
    </div>
    </div>

<!--end: tabs-->

</div>
<!--end: user account content-->

<script type="text/javascript">

    $(document).ready(function(){

            $.ajax({
                url:'/project/Propertys/getAdverts',
                type:"GET",

                success: function(data) {
                    $('#listadverts').html(data);
                }
            });

    });

</script>