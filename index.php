<?php
$content = "10, 35, 30, 44, 55, 14, 73";
file_put_contents("array.txt", $content);

// procheti ot faila i suzdai masiv
$fileContent = file_get_contents("array.txt");
$numbersArray = explode(", ", $fileContent);

include("functions.php");

findProductAndPrintLargerNeighbors($numbersArray);
?>