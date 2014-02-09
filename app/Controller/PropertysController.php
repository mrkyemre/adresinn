<?php
    /**
     * @var $this View
     */


class PropertysController extends AppController{

    var $uses = array('Property','City','County','District');

    public function getAdverts()
    {

        $this->autoRender=false;

        if(!($this->request->data)){

            $this->request->data['Property']['aowner']= $this->Auth->user('id');

            //$this->Advert->unbindModel(array('belongsTo'=>array('User')));

            $propertylist = $this->Property->find('all',array(

                'conditions'=>array('Property.aowner'=>$this->Auth->user('id')),
                'recursive'=>1,
                'fields'=>array('Property.id','Property.acounty','Property.adistrict','Property.am2',
                                'Property.aprice','Property.aroomnum','Property.created',
                                'County.countyname','District.districtname')));

            $this->set('propertylists',$propertylist);

            $this->render('list_property','ajax');

        }

    }

    public function startAdd(){

        $this->autoRender=false;

        $dataSource = $this->Property->getDataSource();

        $dataSource->Property->begin();

    }

    public function add()

    {
        $this->autoRender=false;

        if($this->request->is('post'))
        {

            $this->Property->create();
/*

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

            }

            */

            $this->request->data['Property']['aowner']= $this->Auth->user('id');

            $this->Property->save($this->request->data, array('deep'=>true));

            $this->Property->commit();

        }

        $this->redirect(array('controller'=>'Profile','action'=>'index'));

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

            'fields'=>array('id','countyname'),
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

            'fields'=>array('id','districtname'),
            'conditions'=>array('District.districtcountyid'=>$data),

        ));

        foreach($result as $key=>$value)
        {
            echo '<option value="'.$key.'">'.$value.'</option>';
        }

    }

}