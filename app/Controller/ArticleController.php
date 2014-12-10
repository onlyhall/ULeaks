<?php
    class ArticleController extends AppController{
        public $helper = array('Html', 'Form');
        public $uses = array('District', 'City', 'University', 'User', 'Article');
        public function index($id){
            $this->set('article', $this->Article->find('all', $params = array(
                                                        'conditions' => array('Article.id_university' => $id),
            )));
            $this->set('title', 'Вибір статей');
        }
        public function view($id){
            $query ="SELECT * FROM Articles INNER JOIN Users on Articles.id_user = Users.id "
                    . "                     INNER JOIN Universities ON Articles.id_university = Universities.id"
                    . "                     INNER JOIN Cities on Universities.id_city = Cities.id"
                    . "                     INNER JOIN Districts on Cities.id_district = Districts.id WHERE Articles.id = $id";
            $article = $this->Article->query($query);
            $this->set('article', $article);
            
            foreach ($article as $article):
            $this->set('title', $article['Articles']['caption']);
            endforeach;
        }
    }