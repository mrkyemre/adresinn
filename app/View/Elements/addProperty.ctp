<?php
/**
 * @var $this View
 */
?>

<!--start: user new property step 1 -->
<div class="tab-pane fade in" id="ilanekle1">
    <form action="/project/Adverts/add" method="post"  role="form" enctype="multipart/form-data" id="AdvertsAddForm">

        <div class="container">
            <hr>
            <div class="row">
                <div class="col-md-12">

                    <div class="row form-horizontal well">

                        <div class="col-md-12">

                            <a href="#ilanekle2" data-toggle="tab">
                                <button id="button-next1" class="btn btn-custom pull-right mt10">Next</button>
                            </a>

                            <a href="#adverts" data-toggle="tab">
                                <button id="button1id" class="btn btn-custom mt10">Back</button>
                            </a>

                        </div>

                        <div class="form-group">
                            <label for="ilantipi" class="col-sm-2 control-label">İlan tipi</label>
                            <div class="col-sm-5">
                                <select id="selecttype" name="data[Advert][atype]" class="input-small col-sm-3" type="ilantipi">
                                    <option value="">Seçiniz</option>
                                    <option value="K">Kiralık</option>
                                    <option value="S">Satılık</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="bolge" class="col-sm-2 control-label">İl / İlçe Semt</label>
                            <div class="col-sm-5">

                                <select multiple class="input-small col-sm-3" name="data[Advert][acity]" id="selectcity" type="bolge"></select>
                                <select multiple class="input-small col-sm-3" name="data[Advert][acounty]" id="selectcounty" type="bolge"></select>
                                <select multiple class="input-input-small col-sm-3" name="data[Advert][adistrict]" id="selectdistrict" type="bolge"></select>

                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
</div>
<!--end: user new advert-->

<!--start: user new advert step 2-->
<div class="tab-pane fade in" id="ilanekle2">
    <div class="container">
        <hr>
        <div class="row">
            <div class="col-md-12">

                <div class="col-md-12">

                    <a href="#ilanekle3" data-toggle="tab">
                        <button id="button-next2" class="btn btn-custom pull-right mt10">Next</button>
                    </a>

                    <a href="#ilanekle1" data-toggle="tab">
                        <button id="button1id" class="btn btn-custom mt10">Back</button>
                    </a>

                </div>


                <div class="row form-horizontal well">


                    <div class="form-group">
                        <label for="ilanbaslik" class="col-sm-2 control-label">İlan Başlığı</label>
                        <div class="col-sm-5">
                            <input name="data[Advert][aheading]" type="ilanbaslik" class="form-control" id="ilanbaslik" placeholder="İlan Başlığı">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="ilanaciklama" class="col-sm-2 control-label">İlan Açıklaması</label>
                        <div class="col-sm-5">
                            <textarea name="data[Advert][adesc]" type="ilanaciklama" class="form-control" id="ilanaciklama" placeholder="İlan Açıklaması" cols="50" rows="4">

                            </textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="m2" class="col-sm-2 control-label">m2</label>
                        <div class="col-sm-2">
                            <input name="data[Advert][am2]" type="m2" class="form-control" id="fiyat" placeholder="Fiyat">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="odasayisi" class="col-sm-2 control-label">Oda Sayısı</label>
                        <div class="col-sm-5">
                            <select id="selectbasic" type="odasayisi" name="data[Advert][aroomnum]" class="input-small col-sm-3">
                                <option value="" >Seçiniz</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="fiyat" class="col-sm-2 control-label">Fiyat</label>
                        <div class="col-sm-2">
                            <input name="data[Advert][aprice]" type="fiyat" class="form-control" id="fiyat" placeholder="Fiyat">
                        </div>
                    </div>



                </div>

            </div>
        </div>

    </div>
</div>
<!--end: user new advert-->

<!--start: user new advert step 3-->
<div class="tab-pane fade in" id="ilanekle3">
    <div class="container">
        <hr>



        <div class="row form-horizontal well">

            <div class="row">

                <div class="col-md-12">

                    <button type="button" id="buttonsubmit" class="btn btn-custom pull-right mt10">cilick</button>

                    <a href="#ilanekle2" data-toggle="tab">
                        <button id="button1id" class="btn btn-custom mt10">Back</button>
                    </a>

                </div>

            </div>


            <div class="col-md-12">

                <div class="row">

                    <div class="form-group">

                        <div id="uploader" class="col-sm-10">
                            <p>Your browser doesn't have Flash, Silverlight or HTML5 support.</p>
                        </div>

                        <br />

                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
<!--end: user new property-->
