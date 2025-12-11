<?php



$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "prac";


$conn = new mysqli($servername, $username, $password, $database);//هذي طريقة الكلاسات



if (!$conn) {
    die("فشل الاتصال: " . mysqli_connect_error());
}
echo "تم الاتصال بنجاح!";

mysqli_close($conn);



//===========================================الطريقة 2



$conn2= mysqli_connect($servername,$username,$password,$database);

if (!$conn2) {
    die("فشل الاتصال: " . mysqli_connect_error());
}
echo "تم الاتصال بنجاح!";

mysqli_close($conn2);


//==================================================================


?>