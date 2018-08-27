<?php
get_template_part('en/headers/news_header');
?>
<div class="detailBg">
    <div class="detail-mian">
	<?php
		while ( have_posts() ) : the_post();?>
      <div class="detail-head">
            <h4><?php the_title(); ?></h4>
            <div><?php the_time('Y-n-j'); ?></div>
        </div>
        <div class="detail-con">
            <?php the_content( sprintf(
				  __( 'Continue reading %s', 'yearn' ),
          the_title( '<span class="screen-reader-text">', '</span>', false )
        ) );?>
        </div>
    <?php endwhile; ?>
        <div class="comments">
          <?php 
            if ( comments_open() || get_comments_number() ) :
                comments_template();
              endif;
          ?>
        </div>
    </div>
  </div>
  </div>
  <?php
    get_template_part('en/footer');
  ?>
    