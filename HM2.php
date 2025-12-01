

<!--get-------------------------------------------------------------------->


<?php
$name=$_GET['name'];
$pass=$_GET['pass'];
echo $name;
echo $pass;
?>
<form method="get" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
    <input name="name" type="text">
    <input name="pass" type="password">
    <input type="submit">

</form>

<!--post---------------------------------------------------------------------------------------------->


<?php
$nameP=$_POST['nameP'];
$passP=$_POST['passP'];

echo $nameP;
echo "<br>";
echo $passP;

?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
    <input name="nameP" type="text">
    <input name="passP" type="password">
    <input type="submit">

</form>


<!--SESSION---------------------------------------------------------------------------------------------->

<?php
session_start();

if($nameP===$_SESSION['nameP']){
    echo "".$_SESSION['nameP']." مرحبا بك هذه ليست زيارتك الاولى";
}else{
    echo $_SESSION['nameP'];
}
$_SESSION['nameP']=$nameP;

?>


<!--COOKIE---------------------------------------------------------------------------------------------->

<?php
$_COOKIE['nameP']=$nameP;
echo "<br>";
echo $_COOKIE['nameP'];

?>

<!--SERVER---------------------------------------------------------------------------------------------->

<?php

echo "<pre>";
//print_r($_SERVER);
echo $_SERVER['REQUEST_METHOD'];
echo "<pre>";
echo $_SERVER['REMOTE_ADDR'];
echo "<pre>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<pre>";

?>

<!--FILES---------------------------------------------------------------------------------------------->

<?php

if(isset($_FILES["file"])){
    $file=$_FILES["file"];
    if($file['type']=='image/jpeg' || $file['type']=='image/png' || $file['type']=='image/gif'){
        if($file['size']<10*1024*1024){
            move_uploaded_file($file['tmp_name'],"uploads/".$file['name']);
            echo "<pre>";
            print_r($file);
            echo "<pre>";
        }else{
            echo "File size too large.";
        }

    }else{
        echo "File is not image";
    }
}else{
    echo "File is not exist";
}

?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
    <input name="file" type="file">
    <input type="submit">

</form>

