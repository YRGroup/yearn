
<?php 
/**
 * Template Name: en-实验学校
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
get_template_part('en/headers/primary_header')
?>
<section class="page_content" >
  <section class="banner row" >
    <div class="banner_swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/prim_banner1.jpg" alt="banner"></div>
        <div class="swiper-slide"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/prim_banner2.jpg" alt="banner"></div>
        <div class="swiper-slide"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/prim_banner3.jpg" alt="banner"></div>
      </div>
      <div class="banner_pagination"></div>
    </div>
  </section>

  <section class="aboutus" id="prim_aboutus">
    <h1 class="yearn_title">易尔实验小学---快乐的童年</h1>
    <h2 class="yearn_subtitle">让学生在思考、实践和创造活动中健康成长与全面发展</h2>
    <div class="yearn_content ">
      <div class="aboutus_content">
      
        <div class="iconBox">
          <h3>园区极简设计</h3>
          <i class="iconfont">&#xe630;</i>
        </div>

        <div class="iconBox">
          <h3>多元化教育空间</h3>
          <i class="iconfont">&#xe62a;</i>
        </div>
        <div class="iconBox">
          <h3>创造性思维培养</h3>
          <i class="iconfont">&#xe7a1;</i>
        </div>
        <div class="iconBox">
          <h3>生活体验式学习</h3>
          <i class="iconfont">&#xe6bc;</i>
        </div>
        <div class="iconBox">
          <h3>安全环保环境</h3>
          <i class="iconfont">&#xe603;</i>
        </div>
        <div class="content">
        易尔十二年一贯制国际教育园区小学部，设有科普创新、AI、美术、声乐、舞蹈等功能教室，配备足够报告厅、阅览室和课件活动区域，以及配备室外膜结构文化中心、标准运动场地，另有高标准就餐区，根据不同学段的学生身体发育需求提供餐饮定制性服务。牵手上海世界外国语小学，在IB-PYP国际英语教师团队的引领下共同为学生的双语学习能力启动领跑。
聘请国内外知名专家团队，坚持“以人为本·因材施教”的教育理念，
着眼学生的人生发展角度，追求学生综合素质的全面发展，
培养能够站在世界中央发言的中国学子。
        </div>
      </div>
    </div>
  </section>
  
  <section class="prim_videos " id="prim_videos">
    <h1 class="yearn_title">logistic service</h1>
    <h2 class="yearn_subtitle">校区视频</h2>
    <div class="yearn_content">
      <p>视频（Video）泛指将一系列静态影像以电信号的方式加以捕捉、纪录、处理、储存、传送与重现的各种技术。连续的图像变化每秒超过24帧（frame）画面以上时，根据视觉暂留原理，人眼无法辨别单幅的静态画面</p>
      <p class="icon_wrapper"> <i class="iconfont playVideo">&#xea02;</i></p>
    </video>
    </div>
    
  </section>
  <section class="prim_classes" id="prim_classes">
    <h1 class="yearn_title">featured courses</h1>
    <h2 class="yearn_subtitle">特色课程</h2>

    <div class="yearn_content double_swiper"> 
      <div class="classes_swiper_top">
        <div class="swiper-wrapper">
          <?php $courses = get_posts(array('post_type' => 'post','category' => '14','numberposts' => '0'));?>
          <?php if($courses): foreach($courses as $post): ?>	
          <article class="swiper-slide">
            <div class="img_wrapper">
            <img src="<?php echo get_thumbnail_or_first($post);  ?>" alt="">
            </div>
            <div class="class_desc">
              <h3><?php the_title();?></h3>
              <p> <?php echo wp_trim_words($post->post_content, 160 );?></p>
              <a href="<?php  get_link_withcatgory($post,14); ?>" class="more">MORE</a>
            </div>
          </article>
          <?php wp_reset_postdata(); endforeach; endif;?>
        </div>
      </div>
      <div class="classes_swiper_bottom">
        <div class="swiper-wrapper">
        <?php if($courses): foreach($courses as $post): ?>	
          <div class="swiper-slide">
            <div class="img_wrapper" style="background-image:url('<?php echo get_thumbnail_or_first($post); ?>')">
              <!-- <img src="<?php echo get_thumbnail_or_first($post);  ?>" alt=""> -->
            </div>
            <h3><?php the_title();?></h3>
          </div>
        <?php wp_reset_postdata(); endforeach; endif;?>
        </div>
        
      </div>
      <div class="classes-prev primary-prev">
        <i class="iconfont">&#xe625;</i>
      </div>
      <div class="classes-next primary-next">
        <i class="iconfont">&#xe600;</i>
      </div>
    </div>
  </section>
  <section class="prim_park" id="prim_park">
    <!-- <img class="park_bg" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/prim_bg13.png" alt=""> -->
    <h1 class="yearn_title text_fff">park design</h1>
    <h2 class="yearn_subtitle text_fff">园区设计</h2>
    <div class="photo_content yearn_content" data-aos="fade-up">
      <div class="swiper-container">
      <?php
      $all_img = get_xc_byid(208); ?>
        <div class="swiper-wrapper">
          <?php if($all_img): foreach($all_img as $img): ?>
          <div class="swiper-slide img_view"> 
            <img class="intro_bg"  src="<?php echo wp_get_attachment_image_url( $img['ID'], 'medium')?>" data-src="<?php echo $img['url'];?>" alt="<?php echo $img['title'];?>">
          </div>
          <?php endforeach; endif;?>
        </div>
        <div class="park-swiper-pagination"></div>
      </div>
      <div class="park-prev primary-prev">
        <i class="iconfont">&#xe625;</i>
      </div>
      <div class="park-next primary-next">
        <i class="iconfont">&#xe600;</i>
      </div>
    </div>
  </section>

  <section class="system " id="prim_system">
    <h1 class="yearn_title">Curriculum system</h1>
    <h2 class="yearn_subtitle">课程体系</h2>
    <div class="yearn_content">
      <p class="desc">易尔幼儿园通过专业的研发团队，升级了目前国内幼教刚刚起步的区角教学概念，将幼儿园室内微型区角衍生成7000多平的大区角概念。通过对科学发现区、音乐舞蹈区、艺术区等区域的体验促进幼儿成长，并在幼儿成长过程中比对各项国际指标。通过观察、评估、计划，实现“行程性成长档案”，帮助家长进行有目的、有方法，科学的家庭教育。</p>
      <span class="item">科学<br>建构</span>
      <span class="item">双语<br>国际</span>
      <span class="item">大小<br>共学</span>
      <span class="item">超脑<br>麦斯</span>
      <span class="item">艺术<br>创客</span>
      <span class="item">绘本<br>戏剧</span>
      <span class="item">食农<br>教育</span>
      <span class="item">感觉<br>统合</span>
    </div>
  </section>

  <section class="teachers" id="prim_teachers">
    <h1 class="yearn_title text_fff">teachers team</h1>
    <h2 class="yearn_subtitle text_fff">师资团队</h2>
    <div class="yearn_content">
      <div class="teachers-swiper">
      <?php
      $all_img = get_xc_byid(210); ?>
        <div class="swiper-wrapper">
          <?php if($all_img): foreach($all_img as $img): ?>
          <div class="swiper-slide"> 
              <img class="teacher_img"  src="<?php echo $img['url'];?>" alt="<?php echo $img['title'];?>">
              <p><?php echo $img['title'];?></p>
              <p><?php echo $img['excerpt'];?></p>
          </div>
          <?php endforeach; endif;?>
        </div>
        <div class="teachers-swiper-pagination"></div>
      </div>
      <div class="teacher-prev primary-prev">
        <i class="iconfont">&#xe625;</i>
      </div>
      <div class="teacher-next primary-next">
        <i class="iconfont">&#xe600;</i>
      </div>
    </div>
  </section>

  <section class="modal animated fadeIn "></section>
  <section class="video_wrapper animated fadeInDown ">
    <span class="closeVideo "><i class="iconfont closeIcon">&#xea13;</i></span>
    <video  id="video" preload="auto" controls="controls" autoplay=""   width="100%" autoplay="autoplay" type="video/mp4" src="http://yr-zhxy.oss-cn-beijing.aliyuncs.com/YRVideo/web_index.mp4"> 
    </video>
  </section>
</section>

  <?php
    get_template_part('en/footer');
  ?>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/primary.js"></script>
</html>
