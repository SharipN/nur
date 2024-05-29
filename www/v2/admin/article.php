<?php
session_start();
require_once '../function/connect.php';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Админка</title>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: Lato, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 20px;
        }
        h1 {
            color: #333;
            text-align: center;
            font-family: 'Lato', cursive;
        }
        .welcome-message {
            text-align: center;
            margin-bottom: 20px;
        }
        .logout {
            text-align: center;
            margin-bottom: 40px;
        }
        form {
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
        .service-image {
            text-align: center;
            margin-bottom: 20px;
        }
        .service-image img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Редактирование статей</h1>
    <div class="welcome-message">
        <?php echo "Добрый день, " . htmlspecialchars($_SESSION['login']) . "!"; ?>
    </div>
    <div class="logout">
        <a href="/logout.php">Выйти</a>
    </div>
    
    <?php
    $sql = $pdo->prepare("SELECT * FROM article");
    $sql->execute();
    while ($res = $sql->fetch(PDO::FETCH_OBJ)): ?>
        <form action="/admin/article/article.php/<?php echo htmlspecialchars($res->id); ?>" method="post" enctype="multipart/form-data">
            <p>ID: <?php echo htmlspecialchars($res->id); ?></p>
            <p>
                <label for="title-<?php echo $res->id; ?>">Название услуги:</label><br>
                <input type="text" id="title-<?php echo $res->id; ?>" name="title" value="<?php echo htmlspecialchars($res->title); ?>">
            </p>
            <p>
                <label for="date-<?php echo $res->id; ?>">Дата публикации:</label><br>
                <input type="text" id="date-<?php echo $res->id; ?>" name="date" value="<?php echo htmlspecialchars($res->date); ?>">
            </p>
            <p>
                <label for="im-<?php echo $res->id; ?>">Изображение:</label><br>
                <input type="file" id="im-<?php echo $res->id; ?>" name="im">
            </p>
            <p>
                <input type="submit" name="save" value="Сохранить">
            </p>
        </form>
        <div class="service-image">
            <img src="img/<?php echo htmlspecialchars($res->filename); ?>" alt="Изображение услуги" width="800">
        </div>
    <?php endwhile; ?>
</div>
</body>
</html>
