<?php

//---------------------------------------------
// array function
//----------------------------------------------
$array1=[1,2,3,4,5,6];
$array2=[11,12,13,14,15,16];

array_push($array1,5);

print_r($array1);

echo" <br/>";
echo" <br/>";
echo" <br/>";

array_pop($array1);
print_r($array1);

echo" <br/>";
echo" <br/>";
echo" <br/>";

array_unshift($array1,10);
print_r($array1);

echo" <br/>";
echo" <br/>";
echo" <br/>";

array_shift($array1);
var_dump($array1);

echo" <br/>";
echo" <br/>";
echo" <br/>";

print(count($array1));

echo" <br/>";
echo" <br/>";
echo" <br/>";


if(in_array(10,$array1)){
    echo 'true';
}else{
    echo 'false';
}


echo" <br/>";
echo" <br/>";
echo" <br/>";

echo array_search(3,$array1);

echo" <br/>";
echo" <br/>";
echo" <br/>";

rsort($array1);
print_r($array1);

echo" <br/>";
echo" <br/>";
echo" <br/>";

ksort($array2);
print_r($array2);

echo" <br/>";
echo" <br/>";
echo" <br/>";

print_r(array_merge($array1,$array2));

echo" <br/>";
echo" <br/>";
echo" <br/>";

print_r(array_combine($array2,$array1));

echo" <br/>";
echo" <br/>";
echo" <br/>";

print_r(array_slice($array1,2,2));


echo" <br/>";
echo" <br/>";
echo" <br/>";

$array3=["dhia"=>21,"ghith" => 19];
print_r(array_keys($array3));

echo" <br/>";
echo" <br/>";
echo" <br/>";

print_r(array_values($array3));

echo" <br/>";
echo" <br/>";
echo" <br/>";

//---------------------------------------------
// string function
//---------------------------------------------

$string1 = "hellow world %s!";
$string2 = "Dazai San";

print(strlen($string1));

echo" <br/>";
echo" <br/>";
echo" <br/>";

if(strpos($string1,"he") !==false ){
    echo "true";
}else{
    echo "false";
}

echo" <br/>";
echo" <br/>";
echo" <br/>";

print(str_replace("hellow","Legend",$string1));

echo" <br/>";
echo" <br/>";
echo" <br/>";

print(strtolower($string1));

echo" <br/>";
echo" <br/>";
echo" <br/>";

print(strtoupper($string1));

echo" <br/>";
echo" <br/>";
echo" <br/>";

print(trim($string1));

echo" <br/>";
echo" <br/>";
echo" <br/>";

print(strcmp($string1,$string2));

echo" <br/>";
echo" <br/>";
echo" <br/>";

print(str_repeat($string2,5));

echo" <br/>";
echo" <br/>";
echo" <br/>";

print_r(str_split($string1,3));

echo" <br/>";
echo" <br/>";
echo" <br/>";

print(sprintf($string1,$string2));
