<?php
/**
 * @var $this View
 */
?>

<div class="tab-pane active fade in" id="hesap">
    <div class="container">
        <h2 class="pull-left">Yeni İlan Ekle</h2>

<?php echo $this->Form->create('',array('class'=>'form-group','enctype' => 'multipart/form-data')); ?>

        <table class="table table-hover">
            <tbody>
            <tr>
                <td width="15%"><strong>Ilan Tipi</strong></td>
                <td width="85%"><select class="input-large" name="data[Advert][atype]"><option value="K">Kiralik</option><option value="S">Satilik</option> </select></td>
            </tr>
            <tr>
                <td><strong>Il / Ilce / Semt</strong></td>
                <td><select multiple class="input-large" name="data[Advert][acity]" id="selectcity"></select></td>
                <td><select multiple class="input-large" name="data[Advert][acounty]" id="selectcounty"></select></td>
                <td><select multiple class="input-large" name="data[Advert][adistrict]" id="selectdistrict"></select></td>
            </tr>
            <tr>
                <td><strong>Ilan Basligi</strong></td>
                <td width="85%"><input type="text" class="input-large" placeholder="Ilan Basligi" name="data[Advert][aheading]"></td>
            </tr>
            <tr>
                <td><strong>Ilan Aciklamasi</strong></td>
                <td width="85%"><input type="text" class="input-large" placeholder="Ilan Aciklamasi" name="data[Advert][adesc]"></td>
            </tr>

            <tr>
                <td><strong>Fiyat</strong></td>
                <td width="85%"><input type="text" class="input-large" placeholder="Fiyat" name="data[Advert][aprice]"></td>
            </tr>

            <tr>
                <td><strong>Oda Sayisi</strong></td>
                <td width="85%"><input type="text" class="input-large" placeholder="Kac oda var" name="data[Advert][roomnum]"></td>
            </tr>

            <tr>
                <td><strong>Resim Ekle</strong></td>
                <td width="85%"><input type="file" class="input-large"  name="data[Advert][upload]"></td>
            </tr>

            <tr>

                <td width="85%"><input type="submit" value="Kaydet" class="input-large"></td>
            </tr>

            </tbody>
        </table>

  <?php echo $this->Form->end(); ?>


    </div>
</div>

<script type="text/javascript">

    $(document).ready(function(){

                $.ajax({

                    url:'/project/Adverts/loadCityData/',
                    type:'GET',

                    success:function(data){
                        $('#selectcity').html(data);

                    }
            })

    });


    $(document).ready(function(){

    $('#selectcity').click(function(){

       var selected = $('#selectcity').val();

        $.ajax({

            url:'/project/Adverts/loadCountyData/',
            type:'POST',
            data:{selected:selected},

            success:function(data){
                $('#selectcounty').html(data);

            }

        })
      })
    });


    $(document).ready(function(){

        $('#selectcounty').click(function(){

            var selected = $('#selectcounty').val();

            $.ajax({

                url:'/project/Adverts/loadDistrictData/',
                type:'POST',
                data:{selected:selected},

                success:function(data){
                    $('#selectdistrict').html(data);

                }

            })
        })
    });




</script>