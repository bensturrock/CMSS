    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!DOCTYPE html>
<html lang="en">
  <head>

  <?php
    include '../../sections/weeks/wHead.php';
  ?>
    <title>Week 1 | CMSS</title>

  </head>

  <body>

    <?php
     include '../../sections/weeks/wFrame.php';
    ?>

        <div class="container-fluid">
          <h1 class="mt-4">Week 1</h1>
          <h2 class="mt-4">Commentary</h2>
          <h6 class="mt-4">Last Edited: 11 September 2019</h6>

          <h3 class="mt-4">1) At the heart of any HTML5 framework is a grid system. Summarise the grid system you will use in Bootstrap.</h3>
            <p>
              Bootstrap uses a grid system, like all other HTML5 based frameworks.
              <br><br>
              With Bootstrap, a 12-column grid system is typically used. Due to the fact that 12 as a number is easily divisible (a multiple of both 3 and 4), this means that it is generally very flexible, and makes it easy to divide up the usable amount of real estate for pages, width-wise. Bootstrap uses “rem” and “em” instead of ‘traditional’ units such as px and cm because the former is relative to the device it is run on, rather than the latter which are far more explicit and static in the way they arrange what they are used for.
              
            </p>

            <h3 class="mt-4">2) Menu systems are often a bind to get right, especially if you want a multi-dropdown menu. In an ideal world you should write the HTML for a menu as a set of hierarchical un-numbered lists. Summarise how you will implement menus in your site using Bootstrap.</h3>
            <p>
                Menus in my website will be implemented by a vertical menu on the left-hand side of the site, which will take visitors to web pages such as these Commentary pages, and for organisational purposes, these have been split up by the academic weeks. There is also a somewhat more conventional horizontal navigation bar, which takes users to pages such as the homepage, as well as more detailed pages about the manufactures than will be shown on the small Bootstrap cards. The vertical menu can be hidden away, however the horizontal one cannot, because it includes the link to the homepage which I have decided will not be hidden for ease of use for the users of the website.
                <br><br>
                I have chosen car manufacturers specifically, as I will be able to use models of those manufacturers as a next level in the hierarchy of pages in my web site, to demonstrate the abilities of using Bootstrap for this purpose.
            </p>

            <h3 class="mt-4">3) Pick out 5 further features, other than grid and menu, in Bootstrap that you think will be useful. Comment on their use. </h3>
        
            <p>
              <strong>Glyphicon:</strong> As the name suggests, this is sort of in between a glyph and an icon, which is to say that Bootstrap includes with itself a set of (over 260) icons that can be used as labels for certain elements on a web page, such as an envelope icon to signify a mailing address, a magnifying glass for a search, and so on. As these are integrated into Bootstrap, if any of them are needed they can be easily added onto the page without obtaining or creating an image to accomplish the same objective.            
            </p>
            <p>
              <strong> Carousel:</strong>  This is a feature of Bootstrap that allows for slideshows of images to be shown, in a cycle. For my website, this could be useful for showcasing different photos of each car model, for example. 
            </p>
            <p>
              <strong>Scrollspy:</strong>  this a feature of Bootstrap that can detect the scroll position (how far down on the page) of the client and highlight each individual floating navigation menu item based on how far down the client’s device is located. For example, if the client device is on the third section in an array of four sections, then the link for the third section on the Navigation Bar is highlighted. I think this will be useful because it will visually indicate to users which section of the page they are on.
            </p>
            <p>
              <strong>Alerts:</strong>  Bootstrap allows for alerts to pop up onto the page, which will become useful for uses such as logging into the website, when that is eventually added, as I will added a green coloured alert to indicate a successfully login, and a red for an incorrect password entered, for example.
            </p>
            <p>
              <strong>Toast:</strong>  These are like alerts; however, they only show up for a few seconds after they are activated, and then disappear. Their uses could also be applied for a login/register scenario.
            </p>

            <br><br><br><br><br>

          <!-- Outline for the cards inside a Boostrap grid -->
          
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

          </div>
        </div>

    </div>

    <!-- Footer -->
      <div class="footer">
        <h6 class="mt-3">1806055 | Ben Sturrock</h1>
      </div>

    <!-- Bootstrap core JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


      <!-- Hide/Show Menu Script -->
    <script>
      $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>
  </body>
</html>