<?php
function searchPattern($pattern = "", $text = "")
{
  $m = strlen($pattern);
  $n = strlen($text);

  for($i = 0; $i <= ($n - $m); $i++)
  {
    for($j = 0; $j < $m; $j++)
      if($text[$i + $j] != $pattern[$j]) break;

    if($j == $m) echo "Pattern match starting at index " . $i . "\n";
  }
}

$text    = "ABDBABABABDB";
$pattern = "ABA";

searchPattern($pattern, $text);
