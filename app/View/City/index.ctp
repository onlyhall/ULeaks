<?php foreach ($city as $city): 
echo $this->Html->link($city['City']['name'],
array('controller' => 'university', 'action' => 'index', $city['City']['id'])); ?>
    
    
    <?php endforeach; ?>
    
    <?php unset($cities);