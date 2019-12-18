    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<?php 
    include '../databaseconnection.php'; 
  ?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <title>Login | CMSS</title>

    <?php
      include '../view/sections/controller/cHeader.php';
    ?>
  </head>

<body>

    <?php
      include '../view/sections/controller/cFrame.php';
    ?>

  <br><br>
              
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header"><h1 class="mt-4">Login</h1>
            <div class="card-body">
              <form class="form-horizontal" method="post" action="loginAction.php">
                <div class="form-group">
                <div class="form-group">
                    <label for="email" class="cols-sm-2 control-label">Email</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Enter your Email" required/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="cols-sm-2 control-label">Password</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter your Password" required/>
                        </div>
                    </div>
                </div>
                <div class="form-group ">
                    <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block login-button">Register</button>
                </div>
                <div class="login-register">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <br><br><br><br>
        </div>
        </div>
  
    
        <?php
        include '..view/sections/footer.php';
        ?>
  </body>
</html>
