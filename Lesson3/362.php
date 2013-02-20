<?php

function sequence($n, $i=0, $j=1) {
  return $n<=1 ? (array)$i : array_merge((array)$i, sequence($n-1, $j, $i+$j));
}

echo implode(',', sequence(20));
echo "\n";

?>