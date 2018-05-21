<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

      <?php include "data.php"; ?>
      <?php include "post-detail.php"; ?>
      <form  action="post-detail.php" method="get">
                     <select  name="tagChoice">
                        <option  value="noValue" >Scegli un tag</option>
                        <?php
                           $arrTags = [];
                           foreach ($posts as $datum) {
                              foreach ($datum['tag'] as $nameTag) {
                                 if(!in_array($nameTag, $arrfTags)){ ?>
                                    <option class="tagChoice" value= <?php echo $nameTag; ?> > <?php echo $nameTag; ?> </option>
                                    <?php $arrTags[] = $nameTag;
                                 }
                              }
                           } ?>
                     </select>
                     <input  type="submit" value="Cerca">
                  </form>



          <?php
              foreach ($posts as $datum) { ?>
                  <div>
                    <a href= <?php echo "post-detail.php?slug=" . $datum['slug'];?>
                        <strong style="font-size:25px">
                            <?php echo $datum['title']; ?>
                        </strong>
                    </a>
                   <small>   <?php echo "Publicato il" . $datum['published_at']; ?> </small>

                  <?php echo substr($datum['content'], 0, 150) . "..."; ?> <br><br>
                </div>
              <?php }
           ?>



  </body>
</html>
