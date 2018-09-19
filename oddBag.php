<?php

for ($i=1; $i<=99; $i+=2)
{
        $bag [] = $i;
    }

echo array_sum($bag);

  if ($bag >= 2001) {
    echo "Big Bag";
  }
  elseif ($bag = 2000) {
    echo "Meh";
  }
  elseif ($bag <= 1999) {
    echo "Small";
  }

?>
