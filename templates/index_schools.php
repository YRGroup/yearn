
<?php
  $is_en_page = is_en_page();
  $schools;
  if($is_en_page){
    $schools=array("kindergarten"=>"YEARN KINDERGARTEN","primary"=>"YEARN PRIMARY","natarium"=>"ENPOOL");
  }else{
    $schools=array("kindergarten"=>"易尔幼儿园","primary"=>"易尔实验学校","natarium"=>"易尔少年游泳馆");
  }
?>

<section class="yearn_school container-fluid" id="yearn_school">
  <div class="row">
    <a href="/kindergarten" class="item col-sm-4 nopadding" alt="易尔幼儿园" >
      <img class="item_image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/school_1.jpg" alt="">
      <div class="item_modal" >
        <span class="school_icon" >
          <img class="item_image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo/logoM2.png" alt="">
        </span>
        <p data-aos="fade-up" data-aos-duration="500" data-aos-delay="200"  class="school_name">
          <?php echo $schools['kindergarten'];?>
      </p>
        <!-- <span class="school_more">MORE <i class="iconfont">&#xea1d;</i></span> -->
      </div>
    </a>
    <a href="/nprimary" class="item col-sm-4 nopadding" alt="易尔实验学校">
      <img class="item_image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/school_2.jpg" alt="">
      <div class="item_modal">
        <span class="school_icon">
          <img class="item_image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo/logoM1.png" alt="">
        </span>
        <p data-aos="fade-up" data-aos-duration="500" data-aos-delay="200" class="school_name">
          <?php  echo $schools['primary'];?>
      </p>
        <!-- <span class="school_more">MORE <i class="iconfont">&#xea1d;</i></span> -->
      </div>
    </a>
    <a href="/natatorium" class="item col-sm-4 nopadding" alt="易尔少年游泳馆" >
      <img class="item_image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/school_3.jpg" alt="">
      <div class="item_modal">
        <span class="school_icon">
        <img class="item_image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo/logoM3.png" alt="">
        </span>
        <p data-aos="fade-up" data-aos-duration="500" data-aos-delay="200" class="school_name">
          <?php echo $schools['natarium'];?>
        </p>
        <!-- <span class="school_more">MORE <i class="iconfont">&#xea1d;</i></span> -->
      </div>
    </a>
  </div>
</section>