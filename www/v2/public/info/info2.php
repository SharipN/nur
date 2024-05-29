<?php

$user="root";
$password="root";
$host="mysql2";
$db="testing";
$dbh = 'mysql:host='.$host.';dbname='.$db.';charset=utf8';
$pdo=new PDO($dbh, $user, $password);

        $variable2 = $_POST["variable"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $text = $_POST["text"];
        $articleid = $variable2;
        $date = date('Y-m-d H:i:s');
        echo $variable2;
        $row = "INSERT INTO comments (name, email, text, articleid, date) VALUES (:name, :email, :text, :articleid , :date )";
        $query = $pdo->prepare($row);
        $query->execute(["name" => $name, "email" => $email, "text" => $text, "date" => $date, "articleid" => $articleid]); 
        echo '<meta HTTP-EQUIV="Refresh" content="0; URL=info.php?variable=' . $variable2 . '">';
        ?>