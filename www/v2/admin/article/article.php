<?php
$user = "root";
$password = "root";
$host = "mysql2";
$db = "testing";
$dbh = 'mysql:host='.$host.';dbname='.$db.';charset=utf8';
$pdo = new PDO($dbh, $user, $password);
?>

<?php
if (isset($_POST["save"])) {
    $list = ['.php', '.zip', '.js', '.html'];

    foreach ($list as $item) {
        if (preg_match("/$item$/", $_FILES['im']['name'])) exit("Расширение файла не подходит");
    }

    $type = getimagesize($_FILES['im']['tmp_name']);
    if ($type && ($type['mime'] != 'image/png' || $type['mime'] != 'image/jpg' || $type['mime'] != 'image/jpeg')) {
        if ($_FILES['im']['name'] < 1024 * 1000) {
            $upload = '../img/' . $_FILES['im']['name'];

            if (move_uploaded_file($_FILES['im']['tmp_name'], $upload)) echo "Файл загружен";
            else echo "ошибка при загрузке файла";
        } else exit("Размер файла превышен");
    } else exit("Тип файла не подходит");
}
?>

<?php

$title = $_POST["title"];
$date = $_POST["date"];
$url = $_SERVER['REQUEST_URI'];
$url = explode('/', $url);
$str = $url[4];
echo $str;

$sql = "UPDATE article SET title=:title, date=:date, filename=:filename WHERE id=$str";
$query = $pdo->prepare($sql);
$query->execute(["title" => $title, "date" => $date, "filename" => $_FILES['im']['name']]);
echo '<meta HTTP-EQUIV="Refresh" content="0; URL=/admin/article.php">';
?>
