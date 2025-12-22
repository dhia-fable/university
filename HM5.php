<?php 
$host ='localhost';
$dbname = 'prac';
$username = 'root';
$password = '';
$charset = 'utf8mb4';
$dsn="mysql:host=$host;dbname=$dbname;charset=$charset";
$options = [
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
PDO::ATTR_EMULATE_PREPARES => false
];

// try{
    
    
//     $pdo = new PDO($dsn, $username, $password, $options);

//     $fAcc = 2;
//     $toAcc = 1;
//     $amount = 500;

//     $pdo->beginTransaction();

//     $stmt = $pdo->prepare("UPDATE pank SET balance = balance - ? WHERE id = ?");
//     $stmt->execute([$amount, $fAcc]);

//     $stmt = $pdo->prepare("UPDATE pank SET balance = balance + ? WHERE id = ?");
//     $stmt->execute([$amount,$toAcc]);

//     $stmt = $pdo->prepare("INSERT INTO transactions (from_account, to_account, amount) VALUES (?, ?, ?)");
//     $stmt->execute([$fAcc, $toAcc, $amount]);



//     $pdo->commit();
//     echo "succsesfull";

// } catch (Exception $e) {
    
//     $pdo->rollBack();
//     error_log($e->getMessage());
//     echo "faild";
// }




//bind_value and bind_param==========================================
$pdo = new PDO($dsn, $username, $password, $options);

$id = 2;
$stmt = $pdo->prepare("SELECT * FROM pank WHERE id = :id");
$stmt->bindParam('id', $id);
$id = 1;
$stmt->execute();

$show=$stmt->fetchAll();
echo"<pre>";
var_dump($show);
echo"</pre>";

$id = 2;
$stmt = $pdo->prepare("SELECT * FROM pank WHERE id = :id");
$stmt->bindValue('id', $id);
$id = 1;
$stmt->execute();

$show=$stmt->fetchAll();
echo"<pre>";
var_dump($show);
echo"</pre>";
?>