<?php require 'public/contact.php'; ?>
<?php require_once './function/connect.php';  ?>

<?php
$main = $pdo->prepare("SELECT * FROM header");
$main->execute();
$result = $main->fetch(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html>
<head>
  <title> <?php echo $result->title; ?> </title>
  <meta name="description" content="<?php echo $result->description; ?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/index.css">
</head>
<body>
  

    <div class="intro-section" style="background-image: url('/admin/img/<?php echo $result->filename; ?>');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7 mx-auto text-center" data-aos="fade-up">
            <h1><?php echo $result->name; ?></h1>
          </div>
        </div>
      </div>
    </div>

    <?php require 'public/article.php'; ?>
    <?php require 'public/about.php'; ?>
    <?php require 'public/footer.php'; ?>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>


<style>
   body {
            font-family: Lato, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        
        h1 {
            font-size: 2.5em;
            font-weight: 700;
            text-align: center;
            margin-bottom: 20px;
            position: relative;
            padding: 10px;
            background: linear-gradient(135deg, #e9ecef, #f8f9fa);
            border-radius: 8px;
            color: #007bff; /* Цвет текста заголовка */
            transition: color 0.3s ease;
        }
        h1:hover {
            color: #0056b3; /* Изменение цвета текста при наведении */
        }
        h1::after {
            content: "";
            width: 50px;
            height: 4px;
            background-color: #007bff;
            display: block;
            margin: 10px auto 0;
            border-radius: 2px;
        }
        p {
            font-size: 1.1em;
            line-height: 1.6;
            transition: color 0.3s ease;
        }
        p:hover {
            color: #0056b3; /* Изменение цвета текста при наведении */
        }
</style>