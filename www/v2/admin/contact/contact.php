<?php

$user="root";
$password="root";
$host="mysql2";
$db="testing";
$dbh = 'mysql:host='.$host.';dbname='.$db.';charset=utf8';
$pdo=new PDO($dbh, $user, $password);

        $city=$_POST["city"];
        $phone=$_POST["phone"];
        $email=$_POST["email"];
        $row="UPDATE contact SET city=:city,phone=:phone,email=:email";
        $query=$pdo->prepare($row);
        $query->execute(["city"=>$city,"phone"=>$phone,"email"=>$email]);
        echo '<meta HTTP-EQUIV="Refresh" content="0; URL=/admin/contact.php">';

?>