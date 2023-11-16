<?php

function findProductAndPrintLargerNeighbors($array)
{
    $product = 1;
    $size = count($array);

    for ($i = 0; $i < $size; $i++) {
//delimi na 5
        if ($array[$i] % 5 == 0) {
            $product *= $array[$i];
        }
    }

//po-golemi ot sysednite
    if ($i > 0 && $i < $size - 1) {
        if ($array[$i] > $array[$i - 1] && $array[$i] > $array[$i + 1]) {
            echo $product;
        }
    }
}

?>
