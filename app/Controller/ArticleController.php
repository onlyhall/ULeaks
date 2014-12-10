<?php
    class ArticleController extends AppController{
        public $helper = array('Html', 'Form');
        public function index($id){
            $this->set('article', $this->Article->find('all', $params = array(
                                                        'conditions' => array('Article.id_university' => $id),
            )));
            $this->set('title', 'Вибір статей');
        }
        public function view($id){
            $this->set('article', $this->Article->findById($id));
            $this->set('title', 'стаття');
        }
    }