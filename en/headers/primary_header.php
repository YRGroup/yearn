<?php
/**
 * 游泳馆 header
 * The header for our theme
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/primary.css">
  <title>易尔验学校</title>
</head>
<body >

  <header class="yearn_header subpage_header animated "> 
    <!-- <div class="gradual_box "></div> -->
    <?php
      get_template_part('en/headers/topHeader');
    ?>

      <div class="yearn_content navs">
        <div class="logo_box ">
          <a href="/nprimary"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo/primaryschoolLogo.png" alt="logo"></a>
        </div>
        <ul class="yearn_nav">
          <li class="item"><a href="/en">Home</a></li>
          <li class="item"  data-id="prim_aboutus"> <a class="item_link" href="javascript:;">About Us</a></li>
          <li class="item"  data-id="prim_videos"> <a class="item_link" href="javascript:;">Video</a></li>
          <li class="item"  data-id="prim_classes"> <a class="item_link" href="javascript:;">Course</a></li>
          <li class="item"  data-id="prim_park"> <a class="item_link" href="javascript:;">Design</a></li>
          <li class="item"  data-id="prim_system"> <a class="item_link" href="javascript:;">System</a></li>
          <li class="item"  data-id="prim_teachers"> <a class="item_link" href="javascript:;">Teachers</a></li>
          <li class="item"  data-id="prim_contactus"> <a class="item_link" href="javascript:;">Contact Us</a></li>
        </ul>
    </div>
  </header>
  <div class="">
    <div id="mobile" class="mobile_nav">
      <div class="yearn_header_mobile">
        <div class="model_top">
          <a href="/nprimary"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo/primaryschoolLogo.png" alt="logo"></a>
          <div id="burgerBtn"></div>
        </div>
        <ul id="nav">
          <li><a href="/en">Home</a></li>
          <li data-id="prim_aboutus"> <a href="#prim_aboutus">About Us</a></li>
          <li data-id="prim_videos"> <a href="#prim_videos">Video</a></li>
          <li data-id="prim_classes"> <a href="#prim_classes">Course</a></li>
          <li data-id="prim_park"> <a href="#prim_park">Design</a></li>
          <li data-id="prim_system"> <a href="#prim_system">System</a></li>
          <li data-id="prim_teachers"> <a href="#prim_teachers">Teachers</a></li>
          <li data-id="prim_contactus"> <a href="#prim_contactus">Contact Us</a></li>
        </ul>
      </div>
      <div id="mobileBodyContent">
