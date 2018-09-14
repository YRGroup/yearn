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
  <title><?php echo get_option('blogname').'-易尔幼儿园';?></title>
</head>
<body style="position:relative">
  <header class="yearn_header subpage_header animated "> 
    <?php
      // get_template_part('headers/topHeader');
    ?>
    <div class="yearn_content navs">
      <div class="logo_box">
        <a href="/kindergarten"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo/kindergartenLogo.png" alt="logo"></a>
      </div>
      <ul class="yearn_nav" id="yearn_nav">
        <li class="item"><a class="item_link" href="/">易尔首页</a></li>
        <li class="item" data-id="kinder_aboutus"> <a class="item_link" href="javascript:;">关于我们</a></li>
        <li class="item" data-id="kinder_idea"> <a class="item_link" href="javascript:;">教育理念</a></a></li>
        <li class="item" data-id="kinder_classes"> <a class="item_link" href="javascript:;">特色课程</a></li>
        <li class="item" data-id="kinder_teachers"> <a class="item_link" href="javascript:;">师资团队</a></li>
        <li class="item" data-id="kinder_actives"> <a class="item_link" href="javascript:;">少儿活动</a></li>
      </ul>
    </div>
  </header>
      <div class="yearn_header_mobile">
        <div class="model_top">
          <a href="/kindergarten"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo/kindergartenLogo.png" alt="logo"></a>
          <div id="burgerBtn"></div>
        </div>
        </div>
        <div id="nav" class="nav">
          <ul>
            <li class="active"><a href="/">首页</a></li>
            <li data-id="kinder_aboutus"> <a href="#kinder_aboutus">关于我们</a></li>
            <li data-id="kinder_idea"> <a href="#kinder_idea">教育理念</a></a></li>
            <li data-id="kinder_classes"> <a href="#kinder_classes">特色课程</a></li>
            <li data-id="kinderteachers"> <a href="#kinderteachers">师资团队</a></li>
            <li data-id="kinder_video"> <a href="#kinder_video">视频</a></li>
            <li data-id="kinder_actives"> <a href="#kinder_actives">少儿活动</a></li>
          </ul>
      </div>
