    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ben Sturrock">

    <title>About Us | CMSS</title>

    <?php 
     include '../../sections/about/aboutHeader.php'; 
    ?>

  </head>

  <body>

  <?php 
     include '../../sections/about/aboutFrame.php'; 
  ?>

        <div class="container-fluid">
          <h1 class="mt-4">About CMSS</h1>
          <h6 class="mt-4">Last Edited: 30 November 2019</h6>
          
            <p>
              Since 2019, we have been working hard to show you, our dedicated readers the latest information and news on cars in the UK.
            </p><br>
            <p>
              Recently, we have added an RSS Feed for our users, which you can view below. (may not work on macOS Safari, asking you to open the 'News' app.)
            </p>

            <a href="../../../model/rss/RSSFeed.xml">
                <img src="../../images/rss-img.png" alt="RSS" style="width:5%;height:5%;border:0;">
            </a>
            <br>
            <p> Live Weather for Arbroath (unstyled). As we are based in the UK, the units are in the metric system. 
              <a href="https://api.openweathermap.org/data/2.5/weather?q=arbroath,gb&mode=xml&appid=63529331b1ffd0eba7c3bd0343d55475&units=metric">Click Me!</a><br>
              However, we are also working on a version with styling as per the RSS file above, which is currently in beta. 
            </p>

            <div class="row">
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6">

                </div>
              </div>

            <br><br><br>
                <?php
                  getComments();
                ?>

              <div class="container">
              <h2>Make a Comment</h2>
              <form>
                <div class="form-group">
                  <label for="comment">Comment:</label>
                  <textarea class="form-control" rows="5" id="comment"></textarea>
                </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>

            <?php
              if(isset($_POST["submit"]))
              {
                //Including dbconfig file.
                include 'model/databaseconnection.php';
                
                $user_commented_ID = $_POST["name"];
                $article_ID = $_POST["email"];
                $comment_body = $_POST["comment"];

                mysqli_query($conn,"INSERT INTO comments (user_commented_ID,article_ID,comment_body) VALUES ('$user_commented_ID','$article_ID','$comment_body')"); 

                echo '<center> Comment Successfully Submitted </center>';
              }

              ?>

              <!-- Outline for the cards inside a Boostrap grid -->
          
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

          </div>
        </div>

    </div>


    <?php 
     include '../../sections/footer.php'; 
    ?>

  </body>
</html>
