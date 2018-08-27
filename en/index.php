
<?php
/**
 * Template Name: en-首页
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
get_template_part('en/header');

?>
<?php
  get_template_part('templates/index_banner');
?>
<?php
  get_template_part('templates/index_schools');
?>
<?php
  get_template_part('templates/index_introduce');
?>
  
  <!-- <section class="yearn_videos">
    <div class="video_swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="desc">
            <article>
              <h3>易尔幼儿园</h3>
              <p>
                教育的意义是在孩子成长过程中起到良好的引领作用。我们一直在努力，为教育添砖加瓦，把教育工作当成使命，把教育理念融入信仰，汲取中西方教育的精华，传承中华民族教育t的根基，郑州育人教育集团矢志不渝的奔走在路上。
              </p>

            </article>
          </div>
          <div class="thumb" >  
            <video class="video" src="http://pic.yearnedu.com/YRVideo/yearn/%E5%B0%8F%E5%AD%A6.mp4"   preload="auto"  width="100%" > </video>
            <p class="icon_wrapper" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/school_3.jpg')"> 
              <i class="iconfont play" data-src="http://pic.yearnedu.com/YRVideo/yearn/%E5%B9%BC%E5%84%BF%E5%9B%AD.mp4">&#xea02;</i>
            </p>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="desc">
            <article>
              <h3>易尔实验学校</h3>
              <p>
                教育的意义是在孩子成长过程中起到良好的引领作用。我们一直在努力，为教育添砖加瓦，把教育工作当成使命，把教育理念融入信仰，汲取中西方教育的精华，传承中华民族教育t的根基，郑州育人教育集团矢志不渝的奔走在路上。
              </p> 
              
            </article>
          </div>
          <div class="thumb">
            <video class="video" src="http://pic.yearnedu.com/YRVideo/yearn/%E5%B0%8F%E5%AD%A6.mp4"   preload="auto"  width="100%" > </video>
            <p class="icon_wrapper" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/school_3.jpg')"> 
              <i class="iconfont play" data-src="http://pic.yearnedu.com/YRVideo/yearn/%E5%B9%BC%E5%84%BF%E5%9B%AD.mp4">&#xea02;</i>
            </p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="desc">
            <article>
              <h3>易尔少年游泳馆</h3>
              <p>
                教育的意义是在孩子成长过程中起到良好的引领作用。我们一直在努力，为教育添砖加瓦，把教育工作当成使命，把教育理念融入信仰，汲取中西方教育的精华，传承中华民族教育t的根基，郑州育人教育集团矢志不渝的奔走在路上。
              </p>
            </article>
          </div>
          <div class="thumb">
            <video class="video" src="http://pic.yearnedu.com/YRVideo/yearn/%E5%B0%8F%E5%AD%A6.mp4"   preload="auto"  width="100%" > </video>
            <p class="icon_wrapper" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/school_3.jpg')"> 
              <i class="iconfont play" data-src="http://pic.yearnedu.com/YRVideo/yearn/%E5%B9%BC%E5%84%BF%E5%9B%AD.mp4">&#xea02;</i>
            </p>
          </div>
        </div>
        
      </div>
      <div class="video_pagination"></div>

    </div>
  </section> -->
  <section class="index_video container-fluid">
    <ul class="video_list row">
      <li class="item col-sm-6 nopadding">
        <div class="mask mask1 playvideo"></div>
        <video class="video" src="http://pic.yearnedu.com/YRVideo/yearn/%E5%B0%8F%E5%AD%A6.mp4"  width="100%" > </video>
      </li>
      <li class="item col-sm-6 nopadding">
        <div class="mask mask2 playvideo"></div>
        <video class="video" src="http://yr-zhxy.oss-cn-beijing.aliyuncs.com/YRVideo/官网视频/非洲鼓_batch.mp4"  width="100%" > </video>
      </li>
      <li class="item col-sm-6 nopadding">
        <div class="mask mask3 playvideo"></div>
        <video class="video" src="http://pic.yearnedu.com/YRVideo/yearn/%E5%B0%8F%E5%AD%A6.mp4"  width="100%" > </video>
      </li>
      <li class="item col-sm-6 nopadding">
        <div class="mask mask4 playvideo"></div>
        <video class="video" src="http://pic.yearnedu.com/YRVideo/yearn/%E5%B0%8F%E5%AD%A6.mp4" width="100%" > </video>
      </li>
    </ul>
  </section>

  <section class="yearn_park  container-fluid" id="yearn_park">
    <h1 class="yearn_title">PARK DISPLAY</h1>
    <H2 class="yearn_subtitle">园区展示</H2>
    <?php
    $all_img = get_xc_byid(18); ?>
    <ul class="park_content row">
      <?php if($all_img): foreach($all_img as $img): ?>
        <li class="item img_view col-sm-6 col-lg-3  nopadding">
          <img class="intro_bg" data-src="<?php echo $img['url']; ?>" src="<?php  echo wp_get_attachment_image_url( $img['ID'], 'medium' );  ?>" alt="<?php echo $img['title'];?>">
          <p class="park_title"><?php echo $img['title'];?></p>
        </li>
      <?php endforeach; endif;?>
      
    </ul>
  </section>
  <section class="yearn_news" id="yearn_news" data-bottom-bottom="background-position-x:0px;" data-top-bottom="background-position-x:300px">
    <div class="yearn_content container">
      <h1 class="yearn_title text_fff row">PARK DYNAMICS</h1>
      <h2 class="yearn_subtitle text_fff row">易尔动态</h2>
      <ul class="news_content row">
        <?php $posts = get_posts(array('numberposts' => '4','post_type' => 'post','tax_query'=>array(array('taxonomy'=>'category','terms'=>'13')),));
        ?>
        <?php if($posts): foreach($posts as $post): ?>		
        <li class="item col-md-3 col-sm-6 nopadding">
          <a class="link" href="<?php the_permalink(); ?>" target="_blank" title="<?php the_title();?>">
            <h4><?php the_time('Y-n-j');?></h4>
            <h5><?php the_title();?></h5>
            <div class="line"></div>
            <div class="item_content">
              <?php echo wp_trim_words($post->post_content, 66 );?>
            </div>
            <button class="detail" >MORE ></button>
          </a>
        </li>
        <?php wp_reset_postdata(); endforeach; endif;?>
      </ul>
      <a href="/category/en-news" class="more">MORE<i class="iconfont"> &#xe62e;</i></a>
    </div>
  </section>
  <section class="yearn_future" id="yearn_future"> 
    <h1 class="yearn_title">Expectation language</h1>
    <h2 class="yearn_subtitle">展望寄语</h2>
    <div class="yearn_content">
      <div class="index_swiper">
        <div class="swiper-wrapper">
        <?php $all_img = get_xc_byid(611); ?>
        <?php if($all_img): foreach($all_img as $img): ?>
          <div class="swiper-slide">
            <div class="item_img"><img class="intro_bg"src="<?php echo $img['url'];?>" alt="<?php echo $img['title'];?>" alt=""></div>
            <div class="item_content">
              <p class="name"><?php echo $img['title'];?></p>
              <p class="desc"><?php echo $img['excerpt'];?></p>
              <p class="idea">
              <?php echo $img['content'];?>
              </p>
              <img class="icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon_4.png" alt="">
            </div>
          </div>
        <?php endforeach; endif;?>

        </div>
        <!-- 如果需要分页器 -->
        <div class="swiper-pagination"></div>
        
        <!-- 如果需要导航按钮 -->
        <div class="swiper-button-prev" style="background:url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/slide_prev_btn.png');background-position-x: -6px;"></div>
        <div class="swiper-button-next" style="background:url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/slide_next_btn.png');background-position-x: -6px;"></div>

      </div>
    </div>
  </section>
  <?php get_template_part( 'templates/baidumap' );?>
  <section class="modal animated fadeIn "></section>
  <section class="video_wrapper animated fadeInDown ">
    <span class="closeVideo"><i class="iconfont closeIcon">&#xea13;</i></span>
    <video src=""  preload="auto" controls="controls" auto=""  width="100%" id="video">   
      <!-- <source src="" type="video/mp4"> -->
      <!-- <source src="http://yr-zhxy.oss-cn-beijing.aliyuncs.com/YRVideo/web_index.webm" type="video/webm"> -->
    </video>
  </section>
  <?php 
    get_template_part('en/footer');
  ?>
  <script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.0&services=true"></script>
  <script src="//cdn.jsdelivr.net/npm/vivus@latest/dist/vivus.min.js"></script>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/baiduMap.js"></script>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/index.js"></script>
</html>
