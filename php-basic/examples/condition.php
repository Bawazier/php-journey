<?php
  $a = 5;
  $b = 4;
  $i = "bar";

  if ($a > $b):
    echo "a is bigger than b";
  elseif ($a == $b):
    echo "a is equal to b";
  else:
    echo "a is NOT greater than b";
  endif;
  echo "\n";
  switch ($i) {
    case "apple":
        echo "i is apple";
        break;
    case "bar":
        echo "i is bar";
        break;
    case "cake":
        echo "i is cake";
        break;
  }
  
?>
