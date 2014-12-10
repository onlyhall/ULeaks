<?php foreach ($university as $university): 
echo $this->Html->link($university['University']['name'],
array('controller' => 'article', 'action' => 'index', $university['University']['id'])); ?>
    
    
    <?php endforeach; ?>
    
    <?php unset($university);