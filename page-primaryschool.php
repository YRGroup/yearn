
<?php 
get_template_part('headers/primary_header')
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
    <h1 class="yearn_title">办学使命&核心素养</h1>
    <h2 class="yearn_subtitle">培养具有人文底蕴、科学精神、国际视野、健康生活、实践创新、责任担当的21世纪全球性人才。 </h2>
    <div class="yearn_content ">
      <div class="aboutus_content">
        <div class="iconBox">
          <p>创意和创新</p>
          <p> Creativity and Innovation </p>
          <i class="iconfont">&#xe64e;</i>
        </div>
        <div class="iconBox">
          <p>自我激励</p>
          <p>Self-Motivation</p>
          <i class="iconfont">&#xe630;</i>
        </div>
        <div class="iconBox">
          <p>批判性思维</p>
          <p>Critical Thinking</p>
          <i class="iconfont">&#xe62a;</i>
        </div>
        <div class="iconBox">
          <p>团队合作</p>
          <p>Collaboration </p>
          <i class="iconfont">&#xe60e;</i>
        </div>
        <div class="iconBox">
          <p>沟通能力</p>
          <p>Communication </p>
          <i class="iconfont">&#xe624;</i>
        </div>

        <div class="iconBox">
          <p>跨文化意识</p>
          <p>Multi-Cultural Awareness </p>
          <i class="iconfont">&#xe7a1;</i>
        </div>
        <div class="content">
        易尔实验学校是一所全日制双语小学。作为易尔实验园区承上启下的核心教育项目，汲取育人教育集团多年办学经验，融合河南省实验小学师资管理，引进上海世界外国语小学IB PYP课程体系，借鉴上海包玉刚实验学校学院制教学，从学生的习惯养成着手，培养具有人文底蕴、科学精神、国际视野、健康生活、实践创新、责任担当的21世纪全球性人才。 
        </div>
      </div>
    </div>
  </section>
  <section class="prim_videos bg_modal" id="prim_videos">
    <div class="video_box bg_modal">
      <video loop width="100%" autoplay="autoplay" preload="auto" muted src="http://yr-zhxy.oss-cn-beijing.aliyuncs.com/YRVideo/yearn/becoming.mp4"> </video>
    </div>
    <div class="video_content">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/becoming.png" alt="">
      <i class="iconfont playVideo" data-src="http://pic.yearnedu.com/YRVideo/yearn/becomingwhoyouare.mp4">&#xea02;</i>
    </div>
  </section>
  <section class="ISP_system " id="prim_system">
    <h1 class="yearn_title">Curriculum system</h1>
    <h2 class="yearn_subtitle">ISP课程体系</h2>
    <div class="yearn_content tags">
      <img class="park_bg" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/curriculum.png" alt="">
    </div>
  </section>
  <section class="IB-PYP">
    <h1 class="yearn_title">Curriculum system</h1>
    <h2 class="yearn_subtitle">课程体系</h2>
    <div class="yearn_content tags">
      <div class="text">
          <p>IB-PYP课程旨在培养3-12岁的学生，成为终身学习的积极参与者。</p>
          <p>IB-PYP课程在全球多达109个国家被广泛的开发和应用。在6个具有全球性意义的跨学科主题的引领下，学生深化理解，强化知识，发展技能，成为完人。</p>
          <p>开展PYP课程的过程对学生，老师乃至整个学校来说都是一场变革。学生在逐渐在学习中占主导，教师配合深化学生的学习，增强学生的信心，
            培养学生的自我激励意识。学校和家庭作为一个教育共同体，以合作的姿态，配合学生完成学习的全方位体验。</p>
          <p>PBL 项目制学习帮助学生的学业生涯、个人生活、职业生涯更充分的发展，从而让学生更从容的面对主客观世界面临的挑战。</p>
      </div>
      <img class="circle" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/IB-PYP.jpg" alt="">
      <img class="circle" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/PBL.png" alt="">
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
        <i class="iconfont">&#xe613;</i>
      </div>
      <div class="park-next primary-next">
        <i class="iconfont">&#xea1d;</i>
      </div>
    </div>
  </section>

  <section class="faculty">
    <h1 class="yearn_title">Curriculum system</h1>
    <h2 class="yearn_subtitle">师资力量</h2>
    <div class="yearn_content">
      <p class="title">
        <span>中外专家对教师进行持续的职业发展培训</span>
        <span>参加国内外学术会议</span>
        <span>选拔并资助教师到全球顶尖教育学院进修</span>
      </p>
      <div class="tags container">
        <ul class="row">
          <li class=" col-sm-3">
            <div class="tag">
              <p class="top">4 : 6</p>
              <p class="bottom">男女比例</p>
            </div>
          </li>
          <li class=" col-sm-3">
            <div class="tag">
              <p class="top">21%</p>
              <p class="bottom">学士</p>
            </div>
          </li>
          <li class=" col-sm-3">
            <div class="tag">
              <p class="top">66 %</p>
              <p class="bottom">硕士</p>
            </div>
          </li>
          <li class=" col-sm-3">
            <div class="tag">
              <p class="top">13 %</p>
              <p class="bottom">男女比例</p>
            </div>
          </li>
        </ul>
        <ul class="row next">
          <li class=" col-sm-4">
            <div class="tag">
              <p class="top">40 %</p>
              <p class="bottom">海归</p>
            </div>
          </li>
          <li class=" col-sm-4">
            <div class="tag">
              <p class="top">40 %</p>
              <p class="bottom">外教</p>
            </div>
          </li>
          <li class=" col-sm-4">
            <div class="tag">
              <p class="top">20 %</p>
              <p class="bottom">双语中教</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section class="pbl">
    <!-- <h1 class="yearn_title">Pbl system</h1>
    <h2 class="yearn_subtitle">pbl项目制学习</h2> -->
    <div class="main">
      <div class="module left"></div>
      <div class="module right">
        <div class="introduce">在学段制、学院制双学模式下，于IB体系内，以STEAM课程为基础的PBL项目制学习</div>
        <div class="text">
          <p class="title">学段制 -- 完成国家标准大纲体系内的基础校本课程</p>
        </div>
        <div class="text">
          <p class="title">学院制 -- 完成IB体系内以STEAM课程为基础的PBL项目制选修课程</p>
        </div>
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
    get_footer();
  ?>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/primary.js"></script>
</html>
