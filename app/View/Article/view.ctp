<?php 
    foreach ($article as $article): ?>
<h1>
    <?php    echo $article['Articles']['caption']; ?>
</h1>
    <?php
        echo $article['Articles']['text'];
    ?>
<h2>
    <?php echo $article['Users']['login']; ?>
</h2>
<h2>
    <?php echo $article['Universities']['name']; ?>
</h2>
<h2>
    <?php echo $article['Cities']['name']; ?>
</h2>
<h2>
    <?php echo $article['Districts']['name']; ?>
</h2>
    <?php endforeach; ?>
    
    <?php unset($article);