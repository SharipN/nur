<?php session_start(); ?>
<?php require_once '../function/connect.php'; ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Админка</title>
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
    <h1>Редактирование Контактной информации</h1>

    <div class="welcome-message">
        <?php echo "Добрый день, "; ?>
        <br><br>
        <a href="/logout.php">Выйти</a>
    </div>


    <?php 
        $sql = $pdo->prepare("SELECT * FROM contact");
        $sql->execute();
        $res = $sql->fetch(PDO::FETCH_OBJ);
    ?>

    <form action="/admin/contact/contact.php" method="post">
        <input type="text" name="city" placeholder="Город" value="<?php echo $res->city ?>" required>
        <br>
        <input type="text" name="phone" placeholder="Телефон" value="<?php echo $res->phone ?>" required>
        <br>
        <input type="text" name="email" placeholder="Email" value="<?php echo $res->email ?>" required>
        <br><br>
        <input type="submit" value="Сохранить">
    </form>
</div>

</body>
</html>
