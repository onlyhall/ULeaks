<?php
    class CityController extends AppController{
        public $helper = array('Html', 'Form');
        public function index($id){
            $this->set('city', $this->City->find('all', $params = array(
                                                        'conditions' => array('City.id_district' => $id),
            )));
            $this->set('title', 'Вибір міста');
        }
    }