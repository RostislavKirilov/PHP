<?php
// create or append to data.txt file
$file = fopen("data.txt", "a+");
if ($file === false) {
    die("Unable to open file");
}

if (filesize("data.txt") == 0) {
    // file is empty, so write initial content
    $text = "Дисциплина Web приложения се изучава през втория семестър на втори курс. Тази дисциплина се изучава от студенти, които са специалност СИТ.";
    fwrite($file, $text);
} else {
    // file is not empty, so append new content
    $text = "Студентите редовно си пишат домашните.";
    fwrite($file, $text);
}

fclose($file);

// display contents and size of data.txt file
$file = fopen("data.txt", "r");
if ($file === false) {
    die("Unable to open file");
}

$size = filesize("data.txt");
$content = fread($file, $size);

fclose($file);

echo "<p>$content</p>";
echo "<p>Размер на файла: $size байта</p>";
?>
