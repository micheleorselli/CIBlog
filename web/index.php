<?php require_once dirname(__FILE__).'/../src/PostRepository.php'; ?>

<?php
        $pr    = new PostRepository(); 
        $posts  = $pr->findDescendig();
?>

<html>
  <head>
    <link rel="stylesheet" href="./css/main.css" type="text/css" />
  </head>
    <body>
    <div class="container">
        <div class="span-24 header ">
            <h2 class="prepend-1">CIBlog</h2>
        </div>
        <hr/>
        
        <div class="span-17 prepend-1 colborder">
            <?php foreach ($posts as $post) : ?>
            <div class="evento span-17">
              <h3><?php echo $post->getTitolo(); ?></h3>
              <p> <?php echo $post->getDescrizione(); ?></p>
              div>
            <hr/>
            <?php endforeach; ?>
        </div>
        <div class="span-24 footer ">
            .&nbsp;
        </div>
    </div>
    </body>
</html>