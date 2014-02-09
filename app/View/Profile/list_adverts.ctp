<?php

/**
 * @var $this View
 */


?>

<div class="tab-pane middle-tab fade in" id="favori">

    <h2>Ilanlarim</h2>

    <hr>
    <div id="wrapper">
        <!-- start: Wall -->

        <?php foreach($advertsList as $advertlist):?>

        <div class="span3 item">
            <div class="picture">
                <div class="favorite-icon"> <a href="#"  data-toggle="tooltip" data-placement="top" title="asdasdas" data-original-title="Tooltip on top"> <img src="img/favorite-star.png"></a></div>
                <img src="img/ilan/1.png"> </div>
            <div class="location pull-left"><i class="icon-map-marker"></i> <strong>Be�ikta� Etiler</strong></div>
            <div class="price pull-right">2.000.000 TL</div>
            <div class="clearfix"></div>
            <div class="skill">
                <div class="pull-left property">
                    <ul class="unstyled inline">
                        <li><strong>3+1</strong></li>
                        <li><strong>120 m2</strong></li>
                    </ul>
                </div>
                <div class="pull-right datetime"><strong>3 SN. �NCE</strong></div>
            </div>
        </div>

        <?php endforeach;?>

    </div>

</div>





