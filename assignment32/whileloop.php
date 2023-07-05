<?php

$rows = 8;
$currentRow = 1;

while ($currentRow <= $rows) {
    $stars = str_repeat("*", $currentRow);
    echo $stars . "\n";
    $currentRow++;
}
