<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

      <?php include "data.php"; ?>
      <?php include "post-detail.php"; ?>




          <?php
              foreach ($posts as $datum) {

                  echo "<div>" . "<a href=" . "localhost/php-boolpress/post-detail?slug=" . $datum['slug'] . ">"
                  . "<strong style=" . "font-size:25px" . ">"
                  . $datum['title'] . "</strong>" . "</a>" . "<small>   Publicato il"
                  . $datum['published_at'] . "</small>"  . "</div>"  ;

                  echo substr($datum['content'], 0, 150) . "..." . "<br><br>";



              }
              var_dump($postdetails);


           ?>



  </body>
</html>
