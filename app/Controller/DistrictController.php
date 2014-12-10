<?php
    class DistrictController extends AppController{
        public $helper = array('Html', 'Form');
        public function index(){
            $this->set('district', $this->District->find('all'));
            $this->set('title', 'Вибір області');
        }
    }