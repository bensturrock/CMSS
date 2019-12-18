<!DOCTYPE html>
<html lang="en">
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Kia | CMSS</title>

    <?php
      include 'manuHead.php';
    ?>

  </head>

  <body>


  <?php 
    include 'manuFrame.php'; 
  ?>
        <div class="container-fluid">
          <h1 class="mt-4">Kia</h1>
          <h2 class="mt-4"></h2>

          <?php 
            include '../../../model/api-cmss.php'; 
            getKiaArticle();
          ?>

          </div>
        </div>
    </div>

    <?php
      include 'manuFooter.php';
    ?>
  </body>
</html>
