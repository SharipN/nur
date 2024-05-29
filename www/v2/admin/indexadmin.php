<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Админка </title>
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
    
<div style= "text-align:center">
<h1> Редактирование Головы </h1>


<?php session_start(); ?>
<?php require_once '../function/connect.php' ;?>

<?php echo "Добрый день".$_SESSION['login']; ?>
<br><br>
<a href="/logout.php">Выйти</a>
    <br>
    <br>
    <?php 
        $sql=$pdo->prepare("SELECT * FROM header");
        $sql->execute();
        $res=$sql->fetch(PDO::FETCH_OBJ);
    ?>
    <form action="/admin/indexadmin/indexadmin.php" method="post" enctype="multipart/form-data">
        <input type="text" name="name" value="<?php echo $res->name ?>"> 
        <p>
            <input type="file" name="im">
        </p>
        <input type="submit" name="save" value="Сохранить" > 
    </form>
    <br>
    <img src="img/<?php echo $res->filename ?>" width="1200"> <!-- Увеличили ширину изображения -->

</div>
</body>
</html>
