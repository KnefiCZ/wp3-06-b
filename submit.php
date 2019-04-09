<?php include "functions.php"; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>-_-</title>
  </head>
  <body>
    <?php
    for ($i=0; $i < 20; $i++) {
      $vek = filter_input(INPUT_POST, "vek_" . $i);
      echo "Je ti: " . $vek . ". <br>";
      $belt = checkAge($vek);
      ?>
      <div style="display:block;width:10px; height:10px; border: 1px solid black; background-color:<?php echo $belt; ?>;">
      </div>
  <?php  }  ?>
  </body>
</html>
