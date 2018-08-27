<section class="yearn_park  container-fluid" id="yearn_park">
  <h1 class="yearn_title">PARK DISPLAY</h1>
  <H2 class="yearn_subtitle">园区展示</H2>
  <?php
  $all_img = get_xc_byid(18); ?>
  <ul class="park_content row">
    <?php if($all_img): foreach($all_img as $img): ?>
      <li class="item img_view col-sm-6 col-lg-3  nopadding" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="200">
        <img class="intro_bg" data-src="<?php echo $img['url']; ?>" src="<?php  echo wp_get_attachment_image_url( $img['ID'], 'medium' );  ?>" alt="<?php echo $img['title'];?>">
        <p class="park_title"><?php echo $img['title'];?></p>
      </li>
    <?php endforeach; endif;?>
    
  </ul>
</section>