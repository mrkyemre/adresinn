<?php
/**
 * @var $this View
 */?>

<!-- login user menu -->
<div class="navbar-collapse collapse pull-right">

    <ul class="nav navbar-nav">
        <!--start: estate notice -->
        <li class="dropdown notice"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="number">12</span><i class="icon-bullhorn"></i></a>
            <div class="dropdown-menu pull-right" >

                <h6><strong>Sizin için</strong> seçtiklerimiz</h6>

                <ul class="list-unstyled list-inline">
                    <div class="clearfix"></div>
                    <li class="no-read">

                        <a href="#">
                            <div class="pull-left"><img src=""></div>
                            <div class="pull-left">
                                <div class="title"><strong>Beşiktaş Etiler</strong></div>
                                <div class="desc">3+1 120 m2 2.000.000 TL</div>
                                <small class="time">52 dakika önce</small>
                            </div>
                        </a>
                    </li>
                    <li class="no-read">

                        <a href="#">
                            <div class="pull-left"><img src=""></div>
                            <div class="pull-left">
                                <div class="title"><strong>Beşiktaş Etiler</strong></div>
                                <div class="desc">3+1 120 m2 2.000.000 TL</div>
                                <small class="time">52 dakika önce</small>
                            </div>
                        </a>
                    </li>
                    <li class="no-read">

                        <a href="#">
                            <div class="pull-left"><img src=""></div>
                            <div class="pull-left">
                                <div class="title"><strong>Beşiktaş Etiler</strong></div>
                                <div class="desc">3+1 120 m2 2.000.000 TL</div>
                                <small class="time">52 dakika önce</small>
                            </div>
                        </a>
                    </li>
                    <li class="read">

                        <a href="#">
                            <div class="pull-left"><img src=""></div>
                            <div class="pull-left">
                                <div class="title"><strong>Beşiktaş Etiler</strong></div>
                                <div class="desc">3+1 120 m2 2.000.000 TL</div>
                                <small class="time">52 dakika önce</small>
                            </div>
                        </a>
                    </li>
                    <li class="read">

                        <a href="#">
                            <div class="pull-left"><img src=""></div>
                            <div class="pull-left">
                                <div class="title"><strong>Beşiktaş Etiler</strong></div>
                                <div class="desc">3+1 120 m2 2.000.000 TL</div>
                                <small class="time">52 dakika önce</small>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <h6 class=" text-center"><a href="#"> <strong>Tümünü Gör</strong></a></h6>
            </div>

        </li>
        <!--end: estate notice -->

        <!--start: user message-->
        <li class="dropdown notice"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="number">12</span><i class="icon-mail6"></i></a>
            <div class="dropdown-menu pull-right" >

                <h6 ><a href="#"> <strong>Yeni Mesaj</strong> Gönder</a></h6>

                <ul class="list-unstyled list-inline">
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
                <div class="clearfix"></div>
                <h6 class=" text-center"><a href="#"> <strong>Tümünü Gör</strong></a></h6>
            </div>

        </li>
        <!--end: user message-->

        <!--start: user profile menu-->
        <li class="dropdown user-avatar"> <a href="/#" class="dropdown-toggle" data-toggle="dropdown"><span class="user-name"><?php echo $checkuser; ?> <strong>Bullock</strong></span> <?php echo $this->Html->image('sandra.png',array('class'=>'img-circle'))?></a>
            <ul class="dropdown-menu pull-right">
                <li><?php
                    echo $this->Html->useTag('tagstart','a',array('href'=>'Users/logout'));
                    echo $this->Html->tag('i','',array('class'=>'icon-plus4'));
                    echo '&nbsp'.'İlan Ekle';
                    echo $this->Html->useTag('tagend','a');
                    ?></li>

                <li><?php
                    echo $this->Html->useTag('tagstart','a',array('href'=>'/project/Profile/'));
                    echo $this->Html->tag('i','',array('class'=>'icon-star'));
                    echo '&nbsp'.'Ilanlarim';
                    echo $this->Html->useTag('tagend','a');
                    ?></li>

                <li><?php
                    echo $this->Html->useTag('tagstart','a',array('href'=>'Users/logout'));
                    echo $this->Html->tag('i','',array('class'=>'icon-star'));
                    echo '&nbsp'.'Favori Ilanlarim';
                    echo $this->Html->useTag('tagend','a');
                    ?></li>

                <li><?php
                    echo $this->Html->useTag('tagstart','a',array('href'=>'Users/logout'));
                    echo $this->Html->tag('i','',array('class'=>'icon-user2'));
                    echo '&nbsp'.'Hesabim';
                    echo $this->Html->useTag('tagend','a');
                    ?></li>

                <li><?php
                        echo $this->Html->useTag('tagstart','a',array('href'=>'/project/Users/logout'));
                        echo $this->Html->tag('i','',array('class'=>'icon-logout'));
                        echo '&nbsp'.'Cikis';
                        echo $this->Html->useTag('tagend','a');
                    ?></li>

            </ul>
        </li>
        <!--start: user profile menu-->
    </ul>

</div>
<!-- end: login user menu -->