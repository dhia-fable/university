<?php

//=============================================================
// دوال التعامل مع الوقت 
// ============================================================


echo date("y-m-d");
echo "<br>";
echo date("y-m-d h:i:s");



echo "<br>";
echo "<br>";
echo "<br>";


// $timezones = DateTimeZone::listIdentifiers();
// echo"<pre>";
// print_r($timezones);
// echo"</pre>";

$timezone = new DateTimeZone('Asia/Aden');
$datetime = new DateTime('now', $timezone);
echo $datetime->format('Y-m-d h:i:s');
date_default_timezone_set('Asia/Aden');



echo "<br>";
echo "<br>";
echo "<br>";


$timestamp = time();
echo $timestamp;


echo "<br>";
echo "<br>";
echo "<br>";


echo date("Y-m-d h:i:s");


echo "<br>";
echo "<br>";
echo "<br>";


$datetime = new DateTime();
echo $datetime->format("Y-m-d h:i:s");


echo "<br>";
echo "<br>";
echo "<br>";


//=============================================================
// دوال التعامل مع الملفات 
// ============================================================



$file = fopen("toHM.txt", "r");
$contant = fread($file, 1024);
print_r($contant);
fclose($file);


echo "<br>";
echo "<br>";
echo "<br>";


$file = fopen("toHM.txt", "w");
$contant = fwrite($file, "goo to home");
print_r($contant);


echo "<br>";
echo "<br>";
echo "<br>";


__DIR__ . "/../login.php";


echo "<br>";
echo "<br>";
echo "<br>";


echo __FILE__;

echo "<br>";
echo "<br>";
echo "<br>";

echo __DIR__;

echo "<br>";
echo "<br>";
echo "<br>";

echo __LINE__;

echo "<br>";
echo "<br>";
echo "<br>";


if (file_exists('toHM.txt')) {
    echo 'الملف موجود';
} else {
    echo 'الملف غير موجود';
}



echo "<br>";
echo "<br>";
echo "<br>";



$finfo = finfo_open(FILEINFO_MIME_TYPE);
echo "MIME Type \t:\t" . finfo_file($finfo, 'toHM.txt') . "\n";



echo "<br>";
echo "<br>";
echo "<br>";


$finfo = finfo_open(FILEINFO_NONE);
echo "MIME \t :\t" . finfo_file($finfo, 'toHM.txt') . "\n";



echo "<br>";
echo "<br>";
echo "<br>";

$finfo = finfo_open(FILEINFO_MIME);
echo "MIME \t :\t" . finfo_file($finfo, 'toHM.txt') . "\n";
