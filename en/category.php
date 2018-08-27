<?php
  /**
 *
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
?>  
<?php
  echo is_en_page();
?>
<?php get_template_part('en/headers/news_header')?>
    <section class="page_content">
      <div class="news-head headerImg">
        <div class="yearn_content">
          <h1 class="title">YEARN NEWS</h1>
        </div>
      </div>
      <div class="news_wrapper">
        <div class="yearn_content">
          <ul class="yearn_news  container-fluid">
          <?php if ( have_posts() ) :while ( have_posts() ) : the_post(); ?>				
              <li class="item col-sm-4">
                <div class="line"></div>
                <a href="<?php  the_permalink(); ?>">  
                  <p class="time"><?php the_time('n-j'); ?><span>/<?php the_time('Y'); ?></span></p>
                  <p class="title"><?php the_title();?></p>
                  <p class="content"><?php echo wp_trim_words($post->post_content, 42 );?></p>
                  <div class="item_img" style="background-image:url('<?php echo get_thumbnail_or_first($post);  ?>')" alt="<?php the_title();?>"> 
                    <!-- <img src=""  class="news-imgbox"> -->
                  </div> 
                </a>
              </li>
              <?php endwhile; ?>
          </ul>
          <?php else: ?>
            <div class="nodata" style="text-align:center;">
              <!-- <img class="item_image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/nodata.jpg" alt="易尔"> -->
              <p style="line-height:200px;">暂无数据</p>
            </div>
          <?php endif;?>
          <?php echo get_pagination();?>
        </div>
      </div>  
    </section>
<?php get_template_part('en/footer')?>
