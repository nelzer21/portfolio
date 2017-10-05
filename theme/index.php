<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php

      $PageTitle="Home";
      function customPageHeader(){?>
      <?php }
      include_once('header.php');

      <ul class="nav">
        <li><a href="home.php">Home</a></li>
        <li><a href="portfolio.php">Portfolio</a></li>
        <li class="right"><a href="about.php">About</a></li>
        <li class="right"><a href="contact.php">Contact</a></li>
      </ul>
      <div class="banner">
          <img id="banner" src="img/me.jpg" alt=""/>
      </div>

      include_once('footer.php');
      ?>
  </body>
</html>
