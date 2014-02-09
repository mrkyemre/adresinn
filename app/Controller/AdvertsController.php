<?php
/**
 * @var $this View
 */


class AdvertsController extends AppController{

    var $uses = array('Advert','City','County','District');


    public function add()
    {

        $this->autoRender=false;

        if($this->request->is('post'))
        {

            $this->Advert->create();


            if(!empty($this->data))
            {
                //Check if image has been uploaded
                if(!empty($this->data['Advert']['upload']['name']))
                {
                    $file = $this->data['Advert']['upload']; //put the data into a var for easy use

                    $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
                    $arr_ext = array('jpg', 'jpeg', 'gif','png'); //set allowed extensions

                    //only process if the extension is valid
                    if(in_array($ext, $arr_ext))
                    {
                        //do the actual uploading of the file. First arg is the tmp name, second arg is
                        //where we are putting it
                        move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img/adverts/' . $file['name']);

                        //prepare the filename for database entry
                        $this->request->data['Advert']['image'] = $file['name'];
                    }
                }



                $this->request->data['Advert']['aowner']= $this->Auth->user('id');

                $this->Advert->save($this->request->data, array('deep'=>true));


            }


        }

    $this->render('add','ajax');

    }





    public function loadCityData()
    {

        $this->autoRender=false;

            $result = $this->City->find('list',array(

            'fields'=>array('cityid','cityname')

            ));

        foreach($result as $key=>$value)
            {

            echo '<option value="'.$key.'">'.$value.'</option>';

            }

    }


    public function loadCountyData()
    {

        $this->autoRender=false;

        if($this->request->is('ajax')){

            $data=$this->request->data('selected');

        }

        $result = $this->County->find('list',array(

            'fields'=>array('countyid','countyname'),
            'conditions'=>array('County.countycityid'=>$data),

        ));

        foreach($result as $key=>$value)
        {
            echo '<option value="'.$key.'">'.$value.'</option>';
        }

    }


    public function loadDistrictData()
    {
        $this->autoRender=false;

        if($this->request->is('ajax')){

            $data=$this->request->data('selected');

        }

        $result = $this->District->find('list',array(

            'fields'=>array('districtid','districtname'),
            'conditions'=>array('District.districtcountyid'=>$data),

        ));

        foreach($result as $key=>$value)
        {
            echo '<option value="'.$key.'">'.$value.'</option>';
        }

    }








}