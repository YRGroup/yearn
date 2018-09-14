<?php
/**
 * 小学 header
 * The header for our primary
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
  <title><?php echo get_option('blogname').'-易尔实验学校';?></title>
</head>
<body >

  <header class="yearn_header subpage_header animated "> 
    <!-- <div class="gradual_box "></div> -->
    <?php
      // get_template_part('headers/topHeader');
    ?>

      <div class="yearn_content navs">
        <div class="logo_box ">
          <a href="/nprimary"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo/primaryschoolLogo.png" alt="logo"></a>
        </div>
        <ul class="yearn_nav">
          <li class="item"><a href="/">园区首页</a></li>
          <li class="item"  data-id="prim_aboutus"> <a class="item_link" href="javascript:;">关于我们</a></li>
          <li class="item"  data-id="prim_videos"> <a class="item_link" href="javascript:;">校区视频</a></li>
          <li class="item"  data-id="prim_classes"> <a class="item_link" href="javascript:;">特色课程</a></li>
          <li class="item"  data-id="prim_park"> <a class="item_link" href="javascript:;">园区设计</a></li>
          <li class="item"  data-id="prim_system"> <a class="item_link" href="javascript:;">课程体系</a></li>
          <li class="item"  data-id="prim_teachers"> <a class="item_link" href="javascript:;">师资团队</a></li>
        </ul>
    </div>
  </header>
  <div class="yearn_header_mobile">
    <div class="model_top">
      <a href="/nprimary"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo/primaryschoolLogo.png" alt="logo"></a>
      <div id="burgerBtn"></div>
    </div>
    <ul id="nav">
      <li><a href="/">首页</a></li>
      <li data-id="prim_aboutus"> <a href="#prim_aboutus">关于我们</a></li>
      <li data-id="prim_videos"> <a href="#prim_videos">校区视频</a></li>
      <li data-id="prim_classes"> <a href="#prim_classes">特色课程</a></li>
      <li data-id="prim_park"> <a href="#prim_park">园区设计</a></li>
      <li data-id="prim_system"> <a href="#prim_system">课程体系</a></li>
      <li data-id="prim_teachers"> <a href="#prim_teachers">师资团队</a></li>
    </ul>
  </div>
