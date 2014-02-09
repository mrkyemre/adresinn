<?php

/**
 * @var $this View
 */

?>

        <?php foreach($propertylists as $propertylist):?>

            <div class="col-6 col-sm-6 col-lg-4 item">
                <div class="picture"><?php echo $this->Html->image('ilan/onerilen6.jpg'); ?> </div>
                <div class="location pull-left"><i class="icon-location"></i><?php echo $propertylist['County']['countyname'].' | '.$propertylist['District']['districtname'] ;?></div>
                <div class="price pull-right"><?php echo $propertylist['Property']['aprice']; ?> TL </div>
                <div class="clearfix"></div>
                <div class="skill">
                    <div class="pull-left property">
                        <ul class="list-unstyled list-inline">
                            <li><?php echo $propertylist['Property']['aroomnum'];?> Oda</li>
                            <li><?php echo $propertylist['Property']['am2']; ?> m2</li>
                        </ul>
                    </div>
                    <div class="pull-right datetime">3sn önce</div>
                </div>
            </div>

        <?php endforeach;?>






