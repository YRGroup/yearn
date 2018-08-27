
<?php 
get_template_part('headers/kindergarten_header');

?>
<section class="page_content" >
  <?php 
    get_template_part('templates/big_banner');
  ?>
  
  <section class="kinder_aboutus" id="kinder_aboutus" >
    <div class="yearn_content" >
      <div style="text-align:center;">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo/kindergartenLogo.png" alt="logo">
      </div>
      <div class="desc">
        <p> 易尔幼儿园从2013年开始建设筹备，2014年正式投入运营。旨在帮助2-6岁的幼儿学会主动学习，倡导积快乐的“计划-工作-整理-回顾”的思维方式，在“和孩子一起快乐成长”的过程中形成每一个孩子、个人专属的“行程性成长档案 </p>
        <p>易尔幼儿园是目前国内建筑面积最大的3-6岁一体化、综合型幼儿园，其使用面积12000平方米，共能容纳幼儿400多名。幼儿玩拥有活动室、午睡室、盥洗室、舞蹈室，美术创意室、演播大厅、户外大型玩具等先进、环保、超标准化的配套设备设施和7000多平区角教学场地。运用美国的HIGH SCOPE教育理念，实行小班制教学，以激发幼儿的学习兴趣为出发点、以满足幼儿的身心发展需要为主要原则，多学科、整合式的课程设计，为儿童全面发展领航助力。</p>
      </div>
    </div>
  </section>
  <section class="kinder_idea" id="kinder_idea">
    <h1 class="yearn_title text_fff">HIGH SCOPE IDEA EDUCATION</h1>
    <h2 class="yearn_subtitle text_fff">高宽理念教育</h2>
    <div class="yearn_content">
      <div class="idea_content">
        <p>       
          高宽课程（HighScope）是盛誉全球的学前教育课程，也是全世界应用最为广泛的学前教育课程之一。该课程已有40年的理论研究和实践检验、应用的历史，已形成一个以科研作为支持，结合实践应用、教师培训、学前教育机构和幼儿发展评估为一体的课程项目体系。和其他学前课程相比较，高瞻课程以主动性学习为核心，具有著名的“计划-工作-回顾”一日常规和系统科学的评估工具，这也使得其同时得到国内学前领域的知名专家们的广泛认同和推荐。
        </p>
        <P style="margin-top:20px;">
          HighScope是海伊斯科普教育研究机构（ High Scope Educational Research Foundation ）的简称，由美国儿童心理学家，佩里学前教育研究计划得的主持人戴维 . 韦卡特于 1970 年创立。经过三十年的努力，HG已经成为一个开放的、多功能的机构。它集研究者，培训者，教育者，宣传者于一身。
        </P>
        <!-- <a href="" class="more">MORE</a> -->
      </div>
    </div>
  </section>
  <section class="kinder_classes" id="kinder_classes">
    <h1 class="yearn_title text_fff">HIGH SPOCE CHARACTERISTIC COURSE</h1>
    <h2 class="yearn_subtitle text_fff">高宽实践特色课</h2>
    <div class="yearn_content double_swiper"> 
      <div class="classes_swiper_top">
        <div class="swiper-wrapper">
          <?php $courses = get_posts(array('post_type' => 'post','category' => '4','numberposts' => '0'));?>
          <?php if($courses): foreach($courses as $post): ?>	
          <article class="swiper-slide">
            <div class="img_wrapper">
            <img src="<?php echo get_thumbnail_or_first($post);  ?>" alt="">
            </div>
            <div class="class_desc">
              <h3><?php the_title();?></h3>
              <p> <?php echo wp_trim_words($post->post_content, 160 );?></p>
              <a href="<?php  get_link_withcatgory($post,4); ?>" class="more">MORE</a>
            </div>
          </article>
          <?php wp_reset_postdata(); endforeach; endif;?>
        </div>
      </div>
      <div class="classes_swiper_bottom">
        <div class="swiper-wrapper">
        <?php if($courses): foreach($courses as $post): ?>	
          <div class="swiper-slide">
            <div class="img_wrapper" style="background-image:url('<?php echo   get_thumbnail_or_first($post); ?>')">
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
  
  <section class="teachers" id="kinder_teachers">
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
  <?php get_template_part('templates/bg_video');?>
  <section class="kinder_actives" id="kinder_actives">
    <h1 class="yearn_title text_fff">Children's activities</h1>
    <h2 class="yearn_subtitle text_fff">少儿活动</h2>
    <div class="photo_content yearn_content" data-aos="fade-up">
      <div class="swiper-container">
      <?php $all_img = get_xc_byid(1002); ?>
        <div class="swiper-wrapper">
          <?php if($all_img): foreach($all_img as $img): ?>
          <div class="swiper-slide img_view"> 
            <img class="intro_bg" src="<?php echo wp_get_attachment_image_url( $img['ID'], array(300,200));?>" data-src="<?php echo $img['url'];?>" alt="<?php echo $img['title'];?>">
          </div>
          <?php endforeach; endif;?>
        </div>
        <div class="actives-swiper-pagination swiper-pagination"></div>
      </div>
      <div class="park-prev primary-prev">
        <i class="iconfont">&#xe625;</i>
      </div>
      <div class="park-next primary-next">
        <i class="iconfont">&#xe600;</i>
      </div>
    </div>
  </section>
  <section class="modal animated fadeIn"></section>
  <section class="video_wrapper fadeInDown ">
    <span class="closeVideo">
      <i class="iconfont closeIcon">&#xea13;</i>
    </span> 
  <?php
    get_template_part('templates/video');
  ?>
  </section>
  <?php get_footer();?>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/kindergarten.js"></script>
  
</html>
