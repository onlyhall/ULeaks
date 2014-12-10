<?php
    class UniversityController extends AppController{
        public $helper = array('Html', 'Form');
        public function index($id){
            $this->set('university', $this->University->find('all', $params = array(
                                                        'conditions' => array('University.id_city' => $id),
            )));
            $this->set('title', 'Вибір навчального закладу');
        }
    }