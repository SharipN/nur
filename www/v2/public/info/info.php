<?php
$user="root";
$password="root";
$host="mysql2";
$db="testing";
$dbh = 'mysql:host='.$host.';dbname='.$db.';charset=utf8';
$pdo=new PDO($dbh, $user, $password);
?>

<?php

if (isset($_GET['variable'])) {
    $variable = $_GET['variable'];
}

$sqinfo1 = $pdo->prepare("SELECT * FROM article WHERE id =?");
$sqinfo1->execute([$variable]);
$article1 = $sqinfo1->fetch(PDO::FETCH_ASSOC);
?>

<?php
// Подготовка SQL-запроса для выборки комментариев по articleid
$sql23 = $pdo->prepare("SELECT * FROM comments WHERE articleid = :articleid");
$sql23->execute(['articleid' => $variable]);
$comments = $sql23->fetchAll(PDO::FETCH_OBJ);
?>


<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $article1->title ?></title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
  
<div class="container">
    <img src="../../admin/img/<?php echo $article1["filename"]; ?>" alt="">
    <article>
        <h1><?php echo $article1["title"]; ?></h1>
        <br>
        <?php echo $article1["description"]; ?>
    </article>
</div>


<?php foreach($comments as $comments2): ?>
  <div class="com1">
    <div class="person">
      <a href="/public/info/1.php?variable=<?php echo htmlspecialchars(urlencode($comments2->id)); ?>"></a>
      <div class="person-contents">
        <h3><?php echo $comments2->name; ?></h3>
        <div class="email">
          Email: <?php echo $comments2->email; ?> <!-- Добавляем строку с email пользователя -->
        </div>
        <div class="date">
          Дата обновления: <?php echo $comments2->date; ?>
        </div>
        <div class="comment">
          Комментарий: <?php echo $comments2->text; ?> <!-- Добавляем строку с текстом комментария -->
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>


<form action="info2.php" method="post">
        <input type="text" name="name" placeholder="Имя" value="" required>
        <br>
        <input type="text" name="email" placeholder="Email" value="" required>
        <br>
        <input type="text" name="text" placeholder="Комментарий" value="" required>
        <input type="hidden" name="variable" value="<?php echo $variable ?>">

        <br><br>
        <input type="submit" value="Сохранить">
    </form>
    

</body>
</html>

<style>
    body {
        font-family: 'Roboto', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }
    .container {
        max-width: 800px;
        margin: 20px auto;
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        padding: 20px;
        border-radius: 8px;
    }
    .container img {
        width: 100%;
        height: auto;
        border-radius: 8px 8px 0 0;
    }
    .container h1 {
        font-size: 2em;
        margin: 20px 0;
    }
    .container article {
        line-height: 1.6;
    }
    .forum-container {
        max-width: 800px;
        margin: 20px auto;
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        padding: 20px;
        border-radius: 8px;
    }
    .forum-container h2 {
        font-size: 1.5em;
        margin-bottom: 20px;
    }
    .forum-container form textarea {
        width: 100%;
        margin-bottom: 10px;
    }
    .comments {
        margin-top: 20px;
    }

    .person-contents{
        margin: 20px auto;
        max-width: 800px;
    }


    form {
            margin: 20px auto;
            max-width: 800px;
            margin-bottom: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #fafafa;
        }
        form p {
            margin: 10px 0;
        }
        form input[type="text"], form input[type="file"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        form input[type="submit"] {
            background-color: #5cb85c;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        form input[type="submit"]:hover {
            background-color: #4cae4c;
        }

</style>