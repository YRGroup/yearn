
<?php get_template_part('headers/news_header')?>

<?php
  $cat_id_tmp =  isset( $_REQUEST['ct'])? $_REQUEST['ct']:0;
  //record_visitors();
  //echo peter_griffin_quote();
  //print_r(maybe_serialize(get_the_category($post->ID)));

  // echo get_query_var('cat') ;

?>
<section class="page_content" >
  <section class="news_banner">
    <!-- <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/prim_bg10.jpg" alt="banner"> -->
    <div class="yearn_content">
      <h1 class="title">特色课程</h1>
    </div>
  </section>
  <section class="news_content">
    <div class="yearn_content">
      <div class="nav_wrapper">
        <div class="title">
          <span>特色课程</span>
          <span class="titleIcon"><i class="iconfont">&#xe607;</i></span>
        </div>
        <ul class="course_nav">
          <?php $courses = get_posts(array('post_type' => 'post','category' => $cat_id_tmp,'numberposts' => '0'));?>
          <?php $tmpid = $post->ID ?>
          <?php if($courses): foreach($courses as $post): ?>
          <li class="<?php if($post->ID == $tmpid)  echo 'active';?>">
            <a class="item" href="<?php  get_link_withcatgory($post,$cat_id_tmp) ?>">
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
    </div>
  </section>
</section>
<?php  // comments_template( 'comments.php' ); 

// echo showsss();
// if ( comments_open() || get_comments_number() ) :
//   comments_template();
// endif;
//get_template_part('comments') ?>  
<?php get_template_part('footer')?>
