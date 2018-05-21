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
     foreach ($posts as  $datum) {
         if ($slugGet == $datum['slug']) { ?>
             <div class="postcontainer">
                 <h2><?php echo $datum['title']; ?></h2>
                 <small><?php echo $post['published_at']; ?></small>
                 <div class="img-container">
                    <img src="<?php echo $datum['image'];?>" alt="">
                 </div>
             </div>
           <div class="content">
              <span><?php echo $datum['content']; ?></span>
           </div>
           <div class="tag">
               <span>
                   <?php foreach($datum['tag'] as $nameTag) { ?>
                           <small><?php echo "Tag:" . $nameTag  ; ?></small>
                   <?php } ?>
               </span>
           </div>
         <?php
         }
     }
     ?>
     <?php

   // prendo i dati del form
   $nameTag= $_GET;
   $tagToSearch = $nameTag['tagChoice'];
   // faccio un ciclo nell'array di posts
   foreach ($posts as $datum) {
      if(in_array($tagToSearch, $nameTag['tag'])){
?>
         <section >
            <h2 > <?php echo $datum['title']; ?> </h2>
            <div >
               <?php echo $datum['published_at']; ?>
            </div>
         </section>
         <div >
            <img  src= <?php echo $datum['image'] ?> >
            <p> <?php echo $datum['content']; ?> </p>
         </div>
         <div >
            Tags:
            <?php
               foreach ($datum['tag'] as $key => $nameTag) {
                  if($key == (count($datum['tag']) - 1)){
                     echo $nameTag;
                  }else{
                     echo $nameTag . ', ';
                  }
               }
            ?>
         </div>
       <?php
      }
   }
   ?>

  </body>
</html>
