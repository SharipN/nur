<?php require_once './function/connect.php' ;?>

<?php
$sql = $pdo->prepare("SELECT * FROM contact");
$sql->execute();
$res = $sql->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
  <title> <?php echo $res["title"]; ?> </title>
  <meta name="description" content="<?php echo $res["description"]; ?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/contact.css">
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  

    <div class="header-top bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-lg-3">
            <a href="index.php">
              <span style="color: black;font-weight: bold"><img src="../5.png" width="100px" alt=""></span>
            </a>
          </div>
          <div class="col-lg-3 d-none d-lg-block">
            <div class="quick-contact-icons d-flex align-items-center">
              <div class="text">
                <span class="h4 d-block"> <a href = "http://nur.tech-news-forum.com/admin.php"> <?php echo $res["city"]; ?> </a> </span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 d-none d-lg-block">
            <div class="quick-contact-icons d-flex align-items-center">
              <div class="text">
                <span class="h4 d-block"> <a href ="<?php echo $res["description"]; ?>" > <?php echo $res["phone"]; ?></a> </span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 d-none d-lg-block">
            <div class="quick-contact-icons d-flex align-items-center">
              <div class="text">
                <span class="h4 d-block"> <?php echo $res["email"]; ?> </span>
              </div>
            </div>
          </div>
          <div class="col-6 d-block d-lg-none text-right">
              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
