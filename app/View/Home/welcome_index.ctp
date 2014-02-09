<?php

/**
 * @var $this View
 */

?>


<!--start: welcome -->
<div class="welcome fade in" id="welcome" >
    <div class="container">
        <!-- start: Tabs -->
        <ul id="myTab" class="nav nav-tabs">

            <li class="active"><a href="#nereden" data-toggle="tab" class='btnTab' data-rel='nereden'><strong>Nereden</strong> başlasam</a></li>
            <li><a href="#ogrenciyim" data-toggle="tab" class='btnTab' data-rel='ogrenci'>Öğrenciyim</a></li>
            <li><a href="#gencprofesyonel" data-toggle="tab" class='btnTab' data-rel='pro'>Genç Profesyonelim</a></li>
            <li><a href="#aileyim" data-toggle="tab" class='btnTab' data-rel='aile'>Aileyim</a></li>
            <li><a href="#emekliyim" data-toggle="tab" class='btnTab' data-rel='emekli'>Emekliyim</a></li>

        </ul>
        <div id="myTabContent" class="tab-content">

            <!-- start: nereden -->
            <div class="tab-pane fade active in" id="nereden">
                <form class="list-inline" >
                    <ul class="list-unstyled list-inline">
                        <li>
                            <input type="text" class="search-input" placeholder="Nerede yaşamak istiyorsun?">

                        </li>
                        <li>
                            <select  name="selectbasic" class="input-select">
                                <option>Kiralık</option>
                                <option>Satılık</option>
                            </select>
                        </li>
                        <li>
                            <input type="text" class="max-price-input" placeholder="Maks. fiyat">
                        </li>
                        <li>
                            <select id="selectbasic" name="selectbasic" title="asdkas" class="input-small">
                                <option>Oda sayısı</option>
                                <option>1+0</option>
                                <option>1+1</option>
                                <option>2+1</option>
                                <option>3+1</option>
                            </select>
                        </li>
                        <li>
                            <button id="button1id" name="button1id" class="btn btn-custom"><strong>Yeni Adresimi</strong> bul!</button>
                        </li>
                    </ul>
                </form>
            </div>
            <!-- end: nereden -->

            <!-- start: ogrenciyim -->
            <div class="tab-pane fade" id="ogrenciyim">
                <form class="list-inline" >
                    <ul class="list-unstyled list-inline">
                        <li>
                            <input type="text" class="search-input" placeholder="Nerede okuyorsun?">

                        </li>
                        <li>
                            <select  name="selectbasic" class="input-select">
                                <option>Kiralık</option>
                                <option>Satılık</option>
                            </select>
                        </li>
                        <li>
                            <input type="text" class="max-price-input" placeholder="Maks. fiyat">
                        </li>
                        <li>
                            <select id="selectbasic" name="selectbasic" title="asdkas" class="input-small">
                                <option>Oda sayısı</option>
                                <option>1+0</option>
                                <option>1+1</option>
                                <option>2+1</option>
                                <option>3+1</option>
                            </select>
                        </li>
                        <li>
                            <button id="button1id" name="button1id" class="btn btn-custom"><strong>Yeni Adresimi</strong> bul!</button>
                        </li>
                    </ul>
                </form>
            </div>
            <!-- end: ogrenciyim -->

            <!-- start: gencprofesyonel-->
            <div class="tab-pane fade" id="gencprofesyonel">
                <form class="list-inline" >
                    <ul class="list-unstyled list-inline">
                        <li>
                            <input type="text" class="search-input" placeholder="Nerede çalışıyorsun?">
                        </li>
                        <li>
                            <select  name="selectbasic" class="input-small">
                                <option>Kiralık</option>
                                <option>Satılık</option>
                            </select>
                        </li>
                        <li>
                            <input type="text" class="max-price-input" placeholder="Maks. fiyat">
                        </li>
                        <li>
                            <select id="selectbasic" name="selectbasic" title="asdkas" class="input-small">
                                <option>Oda sayısı</option>
                                <option>1+0</option>
                                <option>1+1</option>
                                <option>2+1</option>
                                <option>3+1</option>
                            </select>
                        </li>
                        <li>
                            <button id="button1id" name="button1id" class="btn btn-custom"><strong>Yeni Adresimi</strong> bul!</button>
                        </li>
                    </ul>
                </form>
            </div>
            <!-- end: gencprofesyonel-->

            <!-- start: aileyim-->
            <div class="tab-pane fade" id="aileyim">
                <form class="list-inline" >
                    <ul class="list-unstyled list-inline">
                        <li>
                            <input type="text" class="search-input" placeholder="Ailenle nerede yaşamak istiyorsun?">
                        </li>
                        <li>
                            <select  name="selectbasic" class="input-small">
                                <option>Kiralık</option>
                                <option>Satılık</option>
                            </select>
                        </li>
                        <li>
                            <input type="text" class="max-price-input" placeholder="Maks. fiyat">
                        </li>
                        <li>
                            <select id="selectbasic" name="selectbasic" title="asdkas" class="input-small">
                                <option>Oda sayısı</option>
                                <option>1+0</option>
                                <option>1+1</option>
                                <option>2+1</option>
                                <option>3+1</option>
                            </select>
                        </li>
                        <li>
                            <button id="button1id" name="button1id" class="btn btn-custom"><strong>Yeni Adresimi</strong> bul!</button>
                        </li>
                    </ul>
                </form>
            </div>
            <!-- end: aileyim-->

            <!-- start: emekliyim-->
            <div class="tab-pane fade" id="emekliyim">
                <form class="list-inline" >
                    <ul class="list-unstyled list-inline">
                        <li>
                            <input type="text" class="search-input" placeholder="Huzuru nerede istersin?">
                        </li>
                        <li>
                            <select  name="selectbasic" class="input-small">
                                <option>Kiralık</option>
                                <option>Satılık</option>
                            </select>
                        </li>
                        <li>
                            <input type="text" class="max-price-input" placeholder="Maks. fiyat">
                        </li>
                        <li>
                            <select id="selectbasic" name="selectbasic" title="asdkas" class="input-small">
                                <option>Oda sayısı</option>
                                <option>1+0</option>
                                <option>1+1</option>
                                <option>2+1</option>
                                <option>3+1</option>
                            </select>
                        </li>
                        <li>
                            <button id="button1id" name="button1id" class="btn btn-custom"><strong>Yeni Adresimi</strong> bul!</button>
                        </li>
                    </ul>
                </form>
            </div>
            <!-- end: emekliyim-->

        </div>
        <!-- end: Tabs -->
    </div>
</div>
<!-- end: welcome  -->

<div class="space30"></div>
<div class="clearfix"></div>

<!--start: middle tab-->
<div class="middle-tab">
<div style="width:100%; height:35px; border-bottom:1px solid #ccc;">
    <div class="container">
        <ul class="navs middle-nav-tabs ml20 list-inline list-unstyled">
            <li><a href="#onerilen" 	 data-toggle="tab"><span><strong>ÖNERİLEN</strong> İLANLAR</span></a></li>
            <li class="active"><a href="#favori" data-toggle="tab"><span><strong>FAVORİ</strong> İLANLAR</span></a></li>
            <li><a href="#songezilen" data-toggle="tab"><span><strong>SON GEZDİĞİN</strong> İLANLAR</span></a></li>
        </ul>


    </div>
</div>
<div class="space30"></div>

<!-- start: tab-content -->
<div class="tab-content">

<?php

if($this->Session->check('Auth.User')) {

    echo $this->element('loggedInData');

}else{

    echo $this->element('welcomeMiddle');

}

?>

</div>
<!--end
</div>: tab content-->

<!--end: middle tab-->