<?php require_once './function/connect.php'; ?>

<?php
$sql2 = $pdo->prepare("SELECT * FROM article");
$sql2->execute();
$article = $sql2->fetchAll(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Наши услуги</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f4f4f4;
    }
    
    .site-section {
      padding: 50px 0;
    }
    
    .site-section .container {
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    .site-section h3 {
      font-size: 2rem;
      font-weight: bold;
      color: #333;
      margin-bottom: 30px;
      text-align: center;
    }
    
    .person {
      background-color: #f8f9fa;
      padding: 20px;
      border-radius: 10px;
      transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      height: 100%;
      margin-bottom: 30px;
      text-align: left; /* Выравнивание текста по левому краю */
      position: relative; /* For the link to cover the entire block */
    }
    
    .person:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }
    
    .person-figure {
      flex: 1 1 auto;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 300px; /* Увеличенная высота для изображений */
      overflow: hidden;
      margin-bottom: 20px;
    }
    
    .person-figure img {
      max-width: 100%;
      max-height: 100%;
      object-fit: cover;
    }
    
    .person-contents {
      flex-grow: 1;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      padding: 10px 0;
    }
    
    .person-contents h3 {
      font-size: 1.5rem;
      margin-bottom: 10px;
    }
    
    .person-contents .price {
      color: red;
      font-weight: bold;
      font-size: 1.2rem;
    }

    .date {
      font-size: 0.9rem;
      color: #888;
      margin-top: 10px;
      text-align: right;
    }
    
    @media (max-width: 768px) {
      .site-section .container {
        padding: 20px;
      }
    }

    .person a {
      color: inherit;
      text-decoration: none;
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      z-index: 1;
    }
  </style>
</head>
<body>
  <div class="site-section">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center">
          <h3 style="color: black;">Перечень статей</h3>
        </div>
      </div>
      <div class="row">
        <?php foreach($article as $article2): ?>
        
          <div class="col-lg-4 col-md-6 mb-lg-0">
            <div class="person">
              <a href="/public/info/info.php?variable=<?php echo htmlspecialchars(urlencode($article2->id)); ?>"></a>
              <figure class="person-figure">
                <img src="/admin/img/<?php echo $article2->filename; ?>" class="img-fluid" alt="<?php echo $article2->title; ?>">
              </figure>
              <div class="person-contents">
                <h3><?php echo $article2->title; ?></h3>
                <div class="date">
                  Дата обновления: <?php echo $article2->date; ?>
                </div>
              </div>
            </div>
          </div>
          
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
