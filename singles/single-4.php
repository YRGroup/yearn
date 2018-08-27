


<?php get_template_part('headers/news_header')?>
<section class="page_content" >
  <section class="news_banner">
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/prim_bg10.png" alt="banner">
  </section>
  <section class="news_content">
    <div class="yearn_content">
      <div class="nav_wrapper">
        <div class="title">
          <span>特色课程</span>
          <span class="titleIcon"><i class="iconfont">&#xe607;</i></span>
        </div>
        <ul class="nav">
          <?php $courses = get_posts(array('post_type' => 'post','category' => '4','numberposts' => '0'));?>
          <?php $tmpid = $post->ID ?>
          <?php if($courses): foreach($courses as $post): ?>
          <li class="<?php if($post->ID == $tmpid)  echo 'active';?>">
            <a class="item" href="<?php  get_link_withcatgory($post,4) ?>">
              <i class="iconfont">&#xe609;</i>
              <span><?php the_title();?></span>
            </a>
          </li>
          <?php wp_reset_postdata(); endforeach; endif;?>
        </ul>
      </div>
      <div class="new_content">
        <h1 class="title"><?php the_title(); ?></h1>
        <article class="content">
        <?php the_content() ;?>
        </article>
      </div>
      <?php // comments_template( '/comments.php' ); ?>
    </div>
  </section>
</section>
<?php get_template_part('footer')?>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/aos.js"></script>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/jquery2.2.4.js"></script>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/jquery.scrollTo.js"></script>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/layer.js"></script>
  <!-- <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/skrollr.js"></script> -->
  
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/common.js"></script>
</html>
