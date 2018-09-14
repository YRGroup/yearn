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
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="keywords" content="郑州，教育，育人教育，育人教育集团，郑州育人教育集团，郑州育人国际学校，郑州外国语，郑州外国语女子中学，郑州航空港育人国际学校，郑州航空港">
  <meta name="description" content="郑州育人教育集团创始于2002年，集学前、小学、初中、高中教育为一体，联通学生成长、学习的各个学段，使学段间的科研、教研、教学融为一体，保证教育教学的连贯性和一致性。育人教育集团发展至今已在郑州成功打造了郑州外国语女子中学、育人国际学校等7所学校，3所幼儿园，在校学生近万人,教职员工近千人。">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <?php wp_head(); ?>
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/baiduMap.css">
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/news.css">
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/course.css">
  <title><?php echo get_option('blogname').'-易尔动态';?></title>
</head>
<body style="position:relative">

  <header class="yearn_header"> 
      <?php
        // get_template_part('headers/topHeader');
      ?>
      <div class="yearn_content navs">
        <div class="logo_box">
          <a href="/"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo/<?php echo getLogo()?>.png" alt="logo"></a>   
        </div>
        <ul class="yearn_nav">
          <li class="item" ><a class="item_link" href="/">首页</a></li>
          <li class="item">
            <a class="item_link" href="javascript:;">关于易尔
              <i class="iconfont">&#xe6ec;</i>
            </a>
            <ul class="sub_nav">
              <li class="sub_nav_item"><a target="_blank" href="/360view">易尔全景</a></li>
              <li class="sub_nav_item"><a target="_blank" href="/category/news">易尔动态</a></li>
              <li class="sub_nav_item"><a href="/#yearn_contactus">联系我们</a></li>
            </ul>
          </li>
          <li class="item"> 
            <a class="item_link" target="_blank" href="/kindergarten">幼儿园</a>
          </li>
          <li class="item"> 
            <a class="item_link" target="_blank" href="/nprimary">小学部</a>
          </li>
          <li class="item"> 
            <a class="item_link" target="_blank" href="/natatorium">游泳馆</a>
          </li>
          <li class="item"> 
            <a class="item_link" href="/admission">招生信息</a>
          </li>
          <li class="item"> 
            <a class="item_link" href="/recruit">加入我们</a>
          </li>
        </ul>
      </div>
    </div>
  </header>
  <div class="yearn_header_mobile">
    <div class="model_top">
      <a href="/"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo/<?php echo getLogo()?>.png" alt="logo"></a> 
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

<?php
  function getLogo(){
    $cat_id_tmp = isset( $_REQUEST['ct'])? $_REQUEST['ct']:0;
    if ( in_category(4) && $cat_id_tmp==4 ) {
      return 'kindergartenLogo';
    }elseif( in_category(5) && $cat_id_tmp==5){
      return 'primaryschoolLogo';
    }else{
      return 'logo';
    }
  }
?>