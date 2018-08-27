<?php get_template_part('headers/natatorium_header')?>
<section class="page_content " id="natatorium">
  <section class="main_bg">
    <section class="banner">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/swim_banner.jpg" alt="易尔少儿游泳馆">
      <!-- <p class="content animated bounceInLeft" >
    易尔少年游泳馆是易尔实验园区响应、落实教育部立德树人，大力发展素质教育的号召，重点打造的高标准体育特色项目。
    结合K12学段学生身心成长发育需要，开设多种水上项目课程，配套园区，服务社区。<br>
    <span>入水三岁，出水少年。<br></span>
    <span>3 years in water and young forever.<br></span> -->
      </p>
    </section>
    <section class="classes" id="swim_classes">
      <div class="yearn_content container">
        <h1 class="yearn_title text_fff row">course offered</h1>
        <h2 class="yearn_subtitle text_fff row">课程设置</h2>
        <div class="classes_content row">
          <?php $classes_img = get_xc_byid(204); ?>
          <?php if($classes_img): foreach($classes_img as $img): ?>
          <div class="col-sm-3">
            <article class="animate_card " data-aos="fade-up">
              <header class="card_thumb">
                <img src="<?php echo $img['url'];?>" alt="<?php echo $img['title'];?>">
              </header>
              <div class="card_body">
                <h2 class="card_title">
                  <?php echo $img['title'];?>
                </h2>
                <p class="card_description"><?php echo $img['excerpt'];?></p>
              </div>
            </article>
          </div>
          <?php endforeach; endif;?>
        </div>
      </div>
    </section>
    <section class="aboutus no-touch" id="aboutus">
      <div class="yearn_content">
        <h1 class="yearn_title">about us</h1>
        <h2 class="yearn_subtitle">游泳馆简介</h2>
        <div class="introduction" data-aos="fade-up">
          <p>易尔少年游泳馆是易尔实验园区响应、落实教育部立德树人，大力发展素质
              教育的号召，重点打造的高标准体育特色项目。结合K12 学段学生身心成长发
              育需要，开设多种水上项目课程，配套园区，服务社区。</p>
              <p>
                  易尔少年游泳馆——一家针对2—15 岁少年儿童而建的一站式儿童游泳馆。
                  位于郑州市商鼎路万安街交叉口东北角，总建筑面积1800 ㎡，泳池总面积991.44
                  ㎡。
                  
              </p>
              <p>
                  易尔少年游泳馆从父母的角度审视与鞭策自己，所以无论是在泳池的设计、
                  环境的准备、培训课的设置等大方面的安排，还是在水温的控制、专业的教学技
                  术、物品的选择等细节方面的考虑，均在保证安全的基础上，选用最优的、最适
                  合孩子的方案。
              </p>
        </div>
      </div>
    </section>
  </section>
  <section class="photo" id="swim_photo">
    <h1 class="yearn_title text_fff">stadiums and stadiums</h1>
    <h2 class="yearn_subtitle text_fff">场馆照片</h2>
    <div class="photo_content yearn_content" data-aos="fade-up">
      <div class="swiper-container">
        <?php
      $all_img = get_xc_byid(200); ?>
          <div class="swiper-wrapper">
            <?php if($all_img): foreach($all_img as $img): ?>
            <div class="swiper-slide img_view">
              <img class="intro_bg" src="<?php echo $img['url'];?>" alt="<?php echo $img['title'];?>">
            </div>
            <?php endforeach; endif;?>
          </div>
      </div>
      <div class="swiper-button-prev park-prev">
        <i class="iconfont">&#xe625;</i>
      </div>
      <div class="swiper-button-next park-next">
        <i class="iconfont">&#xe600;</i>
      </div>
    </div>
  </section>

    <section class="hardware no-touch" id="swim_hardware">
      <div class="yearn_content">
        <h1 class="yearn_title">facilities</h1>
        <h2 class="yearn_subtitle">硬件设施</h2>
        <div class="hardware_content" data-aos="fade-up">
          <div class="item slideRightIcon">
            <div class="icon_box" style="overflow:hidden">
              <i class="iconfont animate_icon">&#xe661;</i>
              <!-- <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/swimicon_1.png" alt=""> -->
            </div>
            <p class="title">
              1800平米超大场馆
            </p>
          </div>
          <div class="item rotatex">
            <div class="icon_box">
              <i class="iconfont animate_icon">&#xe601;</i>
              <!-- <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/swimicon_1.png" alt=""> -->
            </div>
            <p class="title"> 专业综合泳池、婴幼儿泳池和 戏水池
            </p>
          </div>
          <div class="item  sonarIcon">
            <div class="icon_box">
              <i class="iconfont animate_icon">&#xe64c;</i>
              <!-- <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/swimicon_1.png" alt=""> -->
            </div>
            <p class="title">英国游泳协会（STA）及世界 广泛认可的专业紫外线消毒
            </p>
          </div>
          <div class="item rotatez">
            <div class="icon_box">
              <i class="iconfont animate_icon">&#xe6fa;</i>
              <!-- <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/swimicon_1.png" alt=""> -->
            </div>
            <p class="title">
              室内24小时恒温环境<br> 4小时一次的水循环更新
            </p>
          </div>
          <div class="item rotatey">
            <div class="icon_box">
              <i class="iconfont animate_icon">&#xe645;</i>
              <!-- <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/swimicon_1.png" alt=""> -->
            </div>
            <p class="title">采用欧盟环保标准的德国进口 地胶、防水材料
            </p>
          </div>
        </div>
      </div>
    </section>
  <!-- <section class="fee " id="swim_fee">
    <h1 class="yearn_title">fee scale</h1>
    <h2 class="yearn_subtitle">收费标准</h2>
    <div class="yearn_content">
      <p class="tips">营业时间：夏季 9:00-8:30 ，冬季 9：00-8：00</p>
      <div class="fee_cards">
        <div class="left_card" data-aos="fade-up">
          <div>
            <p class="classTitle"> 基本年卡<span class="price">￥3000</span></p>
            <p> 有效期一年/不含课程</p>
          </div>
          <div>
            <p class="classTitle"> 亲子年卡<span class="price">￥8000</span></p>
            <p>2-5岁以下,家长可陪同下水<br />90天请假权限,不含课程</p>
          </div>
        </div>

        <div class="fee_card" data-aos="fade-up">
          <div class="card_title">
            <p>45节课程包</p>
            <p>(仅限孩子)</p>
          </div>
          <div class="card_content">
            <p>45节常规课程</p>
            <p>一年畅游</p>
            <p>一年有效期</p>
            <p>可续费延期</p>
          </div>
          <div class="card_price">
            ￥10125
          </div>
        </div>
        <div class="fee_card" data-aos="fade-up">
          <div class="card_title">
            <p>30节课程包</p>
            <p>(仅限孩子)</p>
          </div>
          <div class="card_content">
            <p>30节常规课程</p>
            <p>半年畅游</p>
            <p>半年有效期</p>
            <p>可续费延期</p>
          </div>
          <div class="card_price">
            ￥7200
          </div>
        </div>

        <div class="fee_card" data-aos="fade-up">
          <div class="card_title">
            <p>20节课程包</p>
            <p>(仅限孩子)</p>
          </div>
          <div class="card_content">
            <p>20节常规课程</p>
            <p>三个月畅游</p>
            <p>三个月有效期</p>
            <p>可续费延期</p>
          </div>
          <div class="card_price">
            ￥5400
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <section class="yearn_teachers  container-fluid">
    <h3 class="yearn_title">team</h3>
    <h4 class="yearn_subtitle">教练团队</h4>
    <div class="yearn_content">
      <div class="teachers-swiper">
      <?php
      $all_img = get_xc_byid(994); ?>
        <div class="swiper-wrapper">
          <?php if($all_img): foreach($all_img as $img): ?>
          <div class="swiper-slide"> 
              <img class="teacher_img"  src="<?php echo $img['url'];?>" alt="<?php echo $img['title'];?>">
              <div class="teacher_text">
                <p class="teacher_title"><?php echo $img['title'];?>  <span class="teacher_excerpt"><?php echo $img['content'];?></span></p>
                <p class="line"></p>
                <p class="teacher_content"><?php echo $img['excerpt'];?>
              </p>
              </div>
          </div>
          <?php endforeach; endif;?>
        </div> 
        <div class="teachers-swiper-pagination"></div>
      </div>
      <div class="teacher-prev swiper-button-prev">
        <i class="iconfont">&#xe625;</i>
      </div>
      <div class="teacher-next swiper-button-next">
        <i class="iconfont">&#xe600;</i>
      </div>
    </div>
  </section>
  <section class="problems  container-fluid" id="qaa">
    <h3 class="yearn_title">PARENTS Q&a</h3>
    <h4 class="yearn_subtitle">家长问答</h4>
    <div class="problems_content">
      <div class="yearn_content ">
        <div class="part left " data-aos="fade-up">
          <!-- <h5 class="part_title">招生与录取</h5> -->
          <ul class="problems_list slide_list">
            <?php 
              $posts = get_posts(array('numberposts' => '-1','post_type' => 'post','order' =>'sort','tax_query'=>array(array('taxonomy'=>'category','terms'=>'20')),));
              $i = 1;
            ?>
            <?php if($posts): foreach($posts as $post): ?>		
            <li class="item">
              <h4 class="item_title slide_title">
                <?php 
                echo $i.'、';
                $i++;
                the_title();?>
                <i class="iconfont">&#xea13;</i>
              </h4>
              <p class="item_content slide_title"><?php echo $post->post_content ;?></p>
            </li>
            <?php wp_reset_postdata(); endforeach; endif;?>
          </ul>
        </div>
    </div>
  </section>
  <section class="yearn_contactus  container-fluid" id="yearn_contactus" name="yearn_contactus"> 
    <div class="row">
      <div class="contactus_left col-xs-5 ">
        <div class="contact">
          <h1 class="yearn_title">contact us</h1>
          <h2 class="yearn_subtitle">联系我们</p>
        </div>
        <p class="line"></p>
        <div class="contactus_info hidden-xs">
          <p class="phone">客服热线：0371-86162631</p>
          <p></p>
            地址：黄河南路商鼎路东200米北万安街易尔实验园区内
          </p>
        </div>
      </div>
      <div class="contactus_right col-xs-7 " id="yearn_map"></div>
    </div>
  </section>
</section>
<?php get_footer();?>
<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.0&services=true"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/baiduMap.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/swim.js"></script>

</html>