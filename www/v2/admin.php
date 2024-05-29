<?php session_start(); ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Админка</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        
        .container {
            text-align: center;
            margin-top: 50px;
        }
        
        .container a {
            display: block;
            margin-bottom: 10px;
            color: #333;
            text-decoration: none;
            font-weight: bold;
        }
        
        .container a:hover {
            color: #000;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    
<div class="container">
    <?php echo "Добрый день, ".$_SESSION['login']; ?>
    <br> <br>
    <a href="/logout.php">Выйти</a>
    <a href="/admin/contact.php">Контакты</a>
    <a href="/admin/indexadmin.php">Голова</a>
    <a href="/admin/article.php">Статьи</a>
    <a href="/admin/about.php">О нас</a>
</div>

</body>
</html>
