<?php
$user="root";
$password="root";
$host="mysql2";
$db="testing";
$dbh = 'mysql:host='.$host.';dbname='.$db.';charset=utf8';
$pdo=new PDO($dbh, $user, $password);