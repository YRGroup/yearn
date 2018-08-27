<?php
/**
 * 游泳馆 header
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Yearn
 * @since 1.0
 * @version 1.0
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head();?>

  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/kindergarten.css">
  <title>Yearn</title>
</head>
<body style="position:relative">
  <header class="yearn_header subpage_header animated "> 
    <!-- <div class="gradual_box"></div> -->
    <?php
      get_template_part('en/headers/topHeader');
    ?>
    <div class="yearn_content navs">
      <div class="logo_box">
        <a href="/kindergarten"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo/kindergartenLogo.png" alt="logo"></a>
      </div>
      <ul class="yearn_nav" id="yearn_nav">
        <li class="item"><a class="item_link" href="/en">Home</a></li>
        <li class="item" data-id="kinder_aboutus"> <a class="item_link" href="javascript:;">About Us</a></li>
        <li class="item" data-id="kinder_idea"> <a class="item_link" href="javascript:;">Educational Idea</a></a></li>
        <li class="item" data-id="kinder_classes"> <a class="item_link" href="javascript:;">Course</a></li>
        <li class="item" data-id="kinder_teachers"> <a class="item_link" href="javascript:;">Teachers</a></li>
        <li class="item" data-id="kinder_videos"> <a class="item_link" href="javascript:;">Park Video</a></li>
        <li class="item" data-id="kinder_actives"> <a class="item_link" href="javascript:;">Activities</a></li>
        <!-- <li data-id="yearn_contactus"> <a href="javascript:;">联系我们</a></li> -->
      </ul>
    </div>
  </header>
  <div >
    <div id="mobile" class="mobile_nav">
      <div class="yearn_header_mobile">
        <div class="model_top">
          <a href="/kindergarten"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo/kindergartenLogo.png" alt="logo"></a>
          <div id="burgerBtn"></div>
        </div>
        <ul id="nav">
        <li class="active"><a href="/en">Home</a></li>
          <li data-id="kinder_aboutus"> <a href="#kinder_aboutus">About Us</a></li>
          <li data-id="kinder_idea"> <a href="#kinder_idea">Educational Idea</a></a></li>
          <li data-id="kinder_classes"> <a href="#kinder_classes">Course</a></li>
          <li data-id="kinderteachers"> <a href="#kinderteachers">Teachers</a></li>
          <li data-id="kinder_video"> <a href="#kinder_video">Park Video</a></li>
          <li data-id="kinder_actives"> <a href="#kinder_actives">Activities</a></li>
          <!-- <li data-id="kinder_contactus"> <a href="#kinder_contactus">联系我们</a></li> -->
        </ul>
      </div>
      <div id="mobileBodyContent" >
