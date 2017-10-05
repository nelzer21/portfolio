<!DOCTYPE html>
    <html>
      <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title><?= isset($PageTitle) ? $PageTitle : "Default Title"?></title>

        ;/
        <?php if (function_exists('customPageHeader')){
          customPageHeader();
        }?>
        <link rel="stylesheet" href="style.css">
      </head>
      <body <?php body_class(); ?>>
      <?php
                $PageTitle="Home";
      ?>
          <ul>
          <li<?php if($_GET['page']=="home")   { echo " class=\"active\""; } ?>><a href="?page=home"> Home</a></li>
          <li<?php if($_GET['page']=="about")   { echo " class=\"active\""; } ?>><a href="?page=about"> About</a></li>
          <li<?php if($_GET['page']=="portfolio")  { echo " class=\"active\""; } ?>><a href="?page=portfolio"> Portfolio</a></li>
          <li<?php if($_GET['page']=="contact"){ echo " class=\"active\""; } ?>><a href="?page=contact"> Contact</a></li>
          </ul>

          <div class="banner">
              <img id="banner" src="img/me.jpg" alt=""/>
          </div>
