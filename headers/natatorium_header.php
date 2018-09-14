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
  <!-- bootstrap -->
  <?php wp_head(); ?>
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/baiduMap.css">
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/animate-icon.css">
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/natatorium.css">
  <title><?php echo get_option('blogname').'-易尔少年游泳馆';?></title>
</head>
<body>

  <header class="yearn_header subpage_header animated "> 
    <!-- <div class="gradual_box"></div> -->
    <?php
      // get_template_part('headers/topHeader');
    ?>
    <div class="yearn_content navs">
      <div class="logo_box">
        <a href="/natatorium"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo/swimLogo.png" alt="logo"></a> 
      </div>
      <ul class="yearn_nav">
        <li class="item" ><a class="item_link" href="/">易尔首页</a></li>
        <!-- <li><a href="#yearn_park">园区展示</a></li> -->
        <li class="item"  data-id="swim_classes"> <a class="item_link" href="javascript:;">课程设置</a></li>
        <li class="item"  data-id="aboutus"> <a class="item_link" href="javascript:;">游泳馆简介</a></li>
        <li class="item"  data-id="swim_photo"> <a class="item_link"href="javascript:;">场馆照片</a></li>
        <li class="item"  data-id="swim_hardware"> <a class="item_link" href="javascript:;">硬件设施</a></li>
        <li class="item"  data-id="qaa"> <a class="item_link" href="javascript:;">家长问答</a></li>
      </ul>
    </div>
  </header>
  <div class="yearn_header_mobile">
    <div class="model_top">
      <a href="/natatorium"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo/swimLogo.png" alt="logo"></a>
      <div id="burgerBtn"></div>
    </div>
    <div id="nav" class="nav">
      <ul>
        <li class="active"><a href="/">首页</a></li>
        <li data-id="swim_classes"> <a href="#swim_classes">课程设置</a></li>
        <li data-id="swim_hardware"> <a href="#swim_hardware">硬件设施</a></li>
        <li data-id="swim_photo"> <a href="#swim_photo">场馆照片</a></li>
        <li data-id="qaa"> <a href="#qaa">家长问答</a></li>
      </ul>
    </div>
  </div>
          

          

