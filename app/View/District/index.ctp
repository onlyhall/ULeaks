<h1><?php echo $title; ?></h1>


    <!-- Here is where we loop through our $posts array, printing out post info -->
    <?php 
        $district_first_letter = ''; 
        $dist_buffer = ''; // посредник 
    ?>
    <?php foreach ($district as $district): 
        $district_first_letter = mb_substr($district['District']['name'], 0, 1, 'UTF-8'); 
        if($dist_buffer != $district_first_letter){
            $dist_buffer = $district_first_letter;
            echo '<h2>'.$dist_buffer.'</h2>';
        }
        ?>
    
    <?php echo $this->Html->link($district['District']['name'],
array('controller' => 'city', 'action' => 'index', $district['District']['id'])); ?>
    <?php endforeach; ?>
    
    <?php unset($district);
