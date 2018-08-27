<?php
  /**
   * The main template file
   */
    get_header(); 
    get_template_part('templates/index_banner');
    get_template_part('templates/index_schools');
    get_template_part('templates/index_introduce');
  ?>
  <section class="round" id="yearn_intro">
    <div class="intro_content">
      <h1 class="yearn_title">YEARN design</h1>
      <H2 class="yearn_subtitle">园区设计</H2>
      <div>
        <a target="_blank" href="/360view"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/round.png" alt="logo"></a>
        
        <p class="text">圆融建筑结构特有的空间属性，在满足安全和功能的前提下，增强学生的体验和互动，启发学生主动思考、学习和探索。</p>
      </div>
    </div>
  </section>
  <?php
    // get_template_part('templates/index_park');
    get_template_part('templates/bg_video');
    get_template_part('templates/index_news');
    // get_template_part('templates/big_banner');
    // get_template_part('templates/index_team');
    get_template_part('templates/baidumap');
  ?>
  <section class="modal animated fadeIn "></section>
  <section class="video_wrapper fadeInDown ">
    <span class="closeVideo"><i class="iconfont closeIcon">&#xea13;</i></span>
  <?php
    get_template_part('templates/video');
  ?>
  </section>
  <?php 
    get_footer();
  ?>

  <script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.0&services=true"></script>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/baiduMap.js"></script>
  <script src="//cdn.jsdelivr.net/npm/vivus@latest/dist/vivus.min.js"></script>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/index.js"></script>

  </body>

  </html>