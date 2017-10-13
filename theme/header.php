<!DOCTYPE html>
<html>
 <head>
  <title></title>
 </head>
 <body>
   <div id="header">
    <div id="headerimg">
      <h1>
       <a href="<?php echo get_option('home'); ?>">
          <?php bloginfo('name'); ?></a>
      </h1>
        <div class="description">
          <?php bloginfo('description'); ?>
        </div>
     </div>
   </div>
   <div id="navmenu">
 <ul>
  <li><a href="<?php echo get_settings('home'); ?>">HOME</a></li>
 <?php wp_list_categories('orderby=name&include=1,3,4,5'); ?>
  <li><a href="<?php echo get_settings('home'); ?>">HOME</a></li>
 </ul>
 </div>
