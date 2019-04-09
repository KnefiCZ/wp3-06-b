<?php
 $vek = filter_input(INPUT_POST, "vek");
  function checkAge($vek){
  if ($vek > 17) {
      return "green";
  }
  elseif ($vek > 0) {
    return "pink";
  }
  else {
    return "red";
  }
  }
 ?>
