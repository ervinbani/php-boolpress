<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php include 'data.php'?>
 <body>
   <?php
     $slugGet = $_GET['slug'];
     // var_dump($slug);
     foreach ($posts as  $post) {
         if ($slugGet == $post['slug']) { ?>
             <div class="postcontainer">
                 <h2><?php echo $post['title']; ?></h2>
                 <small><?php echo $post['published_at']; ?></small>
                 <div class="img-container">
                    <img src="<?php echo $post['image'];?>" alt="">
                 </div>
             </div>
           <div class="content">
              <span><?php echo $post['content']; ?></span>
           </div>
           <div class="tag">
               <span>
                   <?php foreach($post['tag'] as $nameTag) { ?>
                           <small><?php echo "Tag: $nameTag ";?></small>
                   <?php } ?>
               </span>
           </div>
         <?php
         }
     }
     ?>

  </body>
</html>
