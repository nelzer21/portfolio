<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Portfolio</title>
  </head>
  <body>
    <?php include('navigation.php'); ?>
    <?php
        $pages = array(
            'index.php' => 'Home',
            'about.php' => 'About',
            'contact.php' => 'Contact',
            'faq.php' => 'FAQ',
            'tutorials.php' => 'Tutorials',);
        $currentPage = basename($_SERVER['REQUEST_URI']);
        ?>
        <div id="menu">
            <ul id="menuList">
                <?php foreach ($pages as $filename => $pageTitle) {
                    if ($filename == $currentPage) { ?>
                <li class="current"><?php echo $pageTitle ; ?></li>
                    <?php } else { ?>
                <li><a href="<?php echo $filename ; ?>"><?php echo $pageTitle ; ?></a></li>
                    <?php
                    }
                 }?>
            </ul>
        </div>
  <div class="hero-image">
      <div class="hero-text">
        <h1>I am John Doe</h1>
        <p>And I'm a Photographer</p>
        <button>Hire me</button>
      </div>
  </div>
  </body>
</html>
