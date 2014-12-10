<?php foreach ($article as $article): 
echo $this->Html->link($article['Article']['caption'],
array('controller' => 'article', 'action' => 'view', $article['Article']['id'])); ?>
    
    
    <?php endforeach; ?>
    
    <?php unset($article);