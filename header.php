<?php
/**
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
  <meta name="baidu-site-verification" content="epdFIoinGF" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="郑州，教育，易尔，郑州易尔，郑州易尔教育，易尔实验园区，易尔园区，易尔教育，育人教育，育人教育集团，郑州育人教育集团，易尔实验学校，易尔实验学校，易尔少年游泳馆，易尔幼儿园，K12基础教育，少年游泳馆，幼儿园，实验学校，索易，索易儿童，索易儿童快乐成长中心">
	<meta name="description" content="易尔实验园区是郑州育人教育集团在K12（十五年一贯制）教育领域，深耕沉淀十余载，优化办学理念，深化办学改革，创新办学模式，科学办学管理，结合国内外优质教育资源，不忘初心，回归教育本质，放眼世界，立足中原，回馈河南教育的一次大胆尝试。">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php echo get_option('blogname').'-首页';?></title>
  <?php wp_head();?>
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/baiduMap.css">
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/index.css">
</head>
<body style="position:relative">
<!-- -->
  <header class="yearn_header"> 
    <?php
      // get_template_part('headers/topHeader');
    ?>
    <div class="yearn_content navs">
      <div class="logo_box">
        <a href="/"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo/logo.png" alt="logo"></a>
      </div>
      <ul class="yearn_nav">
        <li class="item" ><a class="item_link" href="/">首页</a></li>
        <li class="item">
          <a class="item_link" href="javascript:;">关于易尔
            <i class="iconfont">&#xe6ec;</i>
          </a>
          <ul class="sub_nav">
            <li class="sub_nav_item"><a target="_blank" href="/360view">小学全景</a></li>
            <li class="sub_nav_item"><a href="/category/news">易尔动态</a></li>
            <!-- <li class="sub_nav_item"><a href="#yearn_contactus">联系我们</a></li> -->
          </ul>
        </li>
        <li class="item"> 
          <a class="item_link"  href="/kindergarten">幼儿园</a>
        </li>
        <li class="item"> 
          <a class="item_link" href="/nprimary">小学部</a>
        </li>
        <li class="item"> 
          <a class="item_link" href="/natatorium">游泳馆</a>
        </li>
        <li class="item"> 
          <a class="item_link" href="/admission">招生信息</a>
        </li>
        <li class="item"> 
          <a class="item_link" href="/recruit">加入我们</a>
        </li>
        <li class="item"> 
          <a class="item_link" href="#yearn_contactus">联系我们</a>
        </li>
      </ul>
    </div>
  </header>
  <!-- <div>
    <div id="mobile" class="mobile_nav">-->
      <div class="yearn_header_mobile"> 
        <div class="model_top">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo/logo.png" alt="logo">
          <div id="burgerBtn"></div>
        </div>
      </div>
      <div id="nav" class="nav">
        <ul>
          <li><a href="/">首页</a></li>
          <li> <a href="/category/news">易尔动态</a></li>
          <li> <a href="/kindergarten">幼儿园</a></li>
          <li> <a href="/nprimary">小学部</a></li>
          <li> <a href="/natatorium">游泳馆</a></li>
          <li> <a href="/360view">园区全景</a></li>
          <li><a href="/admission">招生信息</a></li>
          <li><a href="/recruit">加入我们</a></li>
          <li> <a href="/#yearn_contactus">联系我们</a></li>
        </ul>
      </div>
      <!-- <div id="mobileBodyContent"> -->
