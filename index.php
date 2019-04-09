<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>_-_</title>
  </head>
  <body>
    <form action="submit.php" method="post">
      <?php
      $vek = 0;
       for ($i=0; $i < 20 ; $i++) {
      ?>
      <label for="vek_<?php echo $i; ?>"><?php echo $vek + $i . "<br>";?>Zadej věk: </label>
      <input name="vek_<?php echo $i; ?>" type="number" value="0" /> <br>
      <?php } ?>
      <br>
      <input name='submit' type="submit" value="Odeslat" />
    </form>


  </body>
</html>
