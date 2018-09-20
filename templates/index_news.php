<section class="yearn_news" id="yearn_news"              data-bottom-bottom="background-position-x:0px;"        data-top-bottom="background-position-x:300px">
  <div class="yearn_content container">
    <h1 class="yearn_title row">YEARN DYNAMICS</h1>
    <h2 class="yearn_subtitle row">易尔动态11</h2>

    <ul class="news_content row" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
      <?php $posts = get_posts(array('numberposts' => '4','post_type' => 'post','tax_query'=>array(array('taxonomy'=>'category','terms'=>'2')),));
      ?>
      <?php if($posts): foreach($posts as $post): ?>		
      <li class="item col-md-3 col-sm-6 nopadding">
        <a class="link" 
        href="<?php the_permalink(); ?>" 
        title="<?php the_title();?>">
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
    <a href="/category/news" class="more" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">MORE<i class="iconfont"> &#xe62e;</i></a>
  </div>
</section>