<?php 
    foreach ($article as $article): ?>
<h1>
    <?php    echo $article['caption']; ?>
</h1>
    <?php
        echo $article['text'];
?>
    <?php endforeach; ?>
    
    <?php unset($article);