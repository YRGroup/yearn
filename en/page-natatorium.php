
<?php 
  /**
 * Template Name: en-游泳馆
 * 作者：网络信息部
 * 
 *  
 *  2013年02月02日 ：
 *  首个版本
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Yearn
 * @since 1.0
 * @version 1.0
 */
get_template_part('en/headers/natatorium_header')?>
<section class="page_content " id="natatorium">
  <section class="main_bg">
  <section class="banner">
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/swim_banner.png" alt="易尔少儿游泳馆">
    <p class="content animated bounceInLeft" >
    易尔少年游泳馆占地面积1800平方米，是专门为2-15岁孩子提供的集日常畅游，娱乐，游泳技能培训于一体的一站式少年游泳馆。<br>
    易尔少年游泳馆把高宽教育理念融入游泳课程，让孩子在学习游泳的过程中真正的爱上水，让游泳成为一项兴趣且不仅仅是一项技能。
    </p>
  </section>
  <section class="classes" id="swim_classes">
    <div class="yearn_content container">
      <h1 class="yearn_title text_fff row">course offered</h1>
      <h2 class="yearn_subtitle text_fff row">课程设置</h2>
      <div class="classes_content row">
      <?php $classes_img = get_xc_byid(204); ?>
        <?php if($classes_img): foreach($classes_img as $img): ?>
        <div class="col-sm-3">
          <article class="animate_card "  data-aos="fade-up">
              <header class="card_thumb">
                <img src="<?php echo $img['url'];?>" alt="<?php echo $img['title'];?>">
              </header>
              <div class="card_body">
                <h2 class="card_title"><?php echo $img['title'];?></h2>
                <p class="card_description">
                <?php echo $img['excerpt'];?>
                </p>
              </div>
          </article>
        </div>
        <?php endforeach; endif;?>
      </div>
    </div>
  </section>  
  <section class="hardware no-touch" id="swim_hardware">
    <div class="yearn_content">
      <h1 class="yearn_title">hardware facilities</h1>
      <h2 class="yearn_subtitle">硬件设施</h2>
      <div class="hardware_content">
        <div class="item slideRightIcon">
          <div class="icon_box" style="overflow:hidden">
            <i class="iconfont animate_icon">&#xe661;</i>
            <!-- <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/swimicon_1.png" alt=""> -->
          </div>
          <p class="title"> 1800平米超大场馆</p>
        </div>
        <div class="item rotatex">
          <div class="icon_box">
            <i class="iconfont animate_icon">&#xe601;</i>
            <!-- <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/swimicon_1.png" alt=""> -->
          </div>
          <p class="title">综合泳池、婴幼儿泳池和
戏水池</p>
        </div>
        <div class="item  sonarIcon">
          <div class="icon_box">
            <i class="iconfont animate_icon">&#xe64c;</i>
            <!-- <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/swimicon_1.png" alt=""> -->
          </div>
          <p class="title">英国游泳协会（STA）及世界
广泛认可的专业紫外线消毒</p>
        </div>
        <div class="item rotatez">
          <div class="icon_box">
            <i class="iconfont animate_icon">&#xe6fa;</i>
            <!-- <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/swimicon_1.png" alt=""> -->
          </div>
          <p class="title">28—34℃室内24小时恒温环境
4小时一次的水循环更新</p>
        </div>
        <div class="item rotatey">
          <div class="icon_box">
            <i class="iconfont animate_icon">&#xe645;</i>
            <!-- <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/swimicon_1.png" alt=""> -->
          </div>
          <p class="title">采用欧盟环保标准的德国进口
地胶、防水材料</p>
        </div>
      </div>
    </div>
  </section>
  </section>
  <section class="photo " id="swim_photo">
    <h1 class="yearn_title text_fff">stadiums and stadiums</h1>
    <h2 class="yearn_subtitle text_fff">场馆照片</h2>
    <div class="photo_content yearn_content" data-aos="fade-up">
      <div class="swiper-container">
      <?php
      $all_img = get_xc_byid(200); ?>
        <div class="swiper-wrapper">
        <?php if($all_img): foreach($all_img as $img): ?>
        <div class="swiper-slide img_view"> 
            <img class="intro_bg" src="<?php echo $img['url'];?>" alt="<?php echo $img['title'];?>">
        </div>
        <?php endforeach; endif;?>
        </div>
      </div>
      <div class="swiper-button-prev">
        <i class="iconfont">&#xe625;</i>
      </div>
      <div class="swiper-button-next">
        <i class="iconfont">&#xe600;</i>
      </div>
    </div>
  </section>

  <section class="fee " id="swim_fee">
    <h1 class="yearn_title">fee scale</h1>
    <h2 class="yearn_subtitle">收费标准</h2>
    <div class="yearn_content">
      <p class="tips">营业时间：夏季 9:00-8:30 ，冬季 9：00-8：00</p>
      <div class="fee_cards">
        <div class="left_card" data-aos="fade-up">
          <div>
            <p class="classTitle"> 基本年卡<span class="price">￥3000</span></p>
            <p> 有效期一年/不含课程</p>
          </div>
          <div>
            <p class="classTitle"> 亲子年卡<span class="price">￥8000</span></p>
            <p>2-5岁以下,家长可陪同下水<br />90天请假权限,不含课程</p>
          </div>
        </div>

        <div class="fee_card" data-aos="fade-up">
          <div class="card_title">
            <p>45节课程包</p>
            <p>(仅限孩子)</p>
          </div>
          <div class="card_content">
            <p>45节常规课程</p>
            <p>一年畅游</p>
            <p>一年有效期</p>
            <p>可续费延期</p>
          </div>
          <div class="card_price">
            ￥10125
          </div>
        </div>
        <div class="fee_card" data-aos="fade-up">
          <div class="card_title">
            <p>30节课程包</p>
            <p>(仅限孩子)</p>
          </div>
          <div class="card_content">
            <p>30节常规课程</p>
            <p>半年畅游</p>
            <p>半年有效期</p>
            <p>可续费延期</p>
          </div>
          <div class="card_price">
            ￥7200
          </div>
        </div>

        <div class="fee_card" data-aos="fade-up">
          <div class="card_title">
            <p>20节课程包</p>
            <p>(仅限孩子)</p>
          </div>
          <div class="card_content">
            <p>20节常规课程</p>
            <p>三个月畅游</p>
            <p>三个月有效期</p>
            <p>可续费延期</p>
          </div>
          <div class="card_price">
            ￥5400
          </div>
        </div>
      </div>      
    </div>
  </section>
</section>
<?php get_template_part('en/footer');?>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/swim.js"></script>
</html>
