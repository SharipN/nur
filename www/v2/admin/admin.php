<?php require_once '../function/connect.php' ;?>


<?php
$login=$_POST["login"];
$password=$_POST["password"];

$sql = $pdo->prepare("SELECT id FROM login WHERE login=:login AND password=:password");
$sql->execute(array('login' =>$login,'password'=>$password));
$array=$sql->fetch(PDO::FETCH_ASSOC);


?>
