<section class="yearn_future" id="yearn_future"> 
  <h1 class="yearn_title">management team</h1>
  <h2 class="yearn_subtitle">管理团队</h2>
  <div class="yearn_content">
  <ul class="list accordion">
    <?php $all_img = get_xc_byid(293); ?>
      <?php if($all_img): foreach($all_img as $img): ?>
        <li class="item ">
          <div class="item_img" style="background-image:url('<?php echo $img['url'];?>')" alt="<?php echo $img['title'];?>">
            <p class="name"><?php echo $img['title'];?></p>
          </div>
          <div class="item_content">
            <div class="content">
              <h4>
                <span class="name"> <?php echo $img['title'];?></span>
                <span> <?php echo $img['excerpt'];?></span>
              </h4>
              <p class="desc"><?php echo $img['content'];?></p>
            </div>
          </div>
        </li>
      <?php endforeach; endif;?>
    </ul>
    </div>
  </div>
</section>