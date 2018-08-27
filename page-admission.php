
<?php 
get_template_part('headers/news_header');

?>

<?php $yearn_school_name = '小学部' ?>
  <section class="admission_banner">
  </section>
  <section class="admission_problems  container-fluid" >
    <h3 class="yearn_title">Admission problems</h3>
    <h4 class="yearn_subtitle">招生解答</h4>
    <div class="problems_content">
      <div class="yearn_content row">
        <div class="part left col-sm-6">
          <h5 class="part_title">招生与录取</h5>
          <ul class="problems_list slide_list">
            <?php 
              $posts = get_posts(array('numberposts' => '-1','post_type' => 'post','order' =>'sort','tax_query'=>array(array('taxonomy'=>'category','terms'=>'8')),));
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
              <pre class="item_content slide_title"><?php echo $post->post_content ;?></pre>
            </li>
            <?php wp_reset_postdata(); endforeach; endif;?>
          </ul>
        </div>
        <div class="part right col-sm-6">
          <h5  class="part_title">特色及其他</h5>
          <ul class="problems_list slide_list">
            <?php 
              $posts = get_posts(array('numberposts' => '-1','post_type' => 'post','order' =>'sort','tax_query'=>array(array('taxonomy'=>'category','terms'=>'9')),));
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
              <pre class="item_content slide_title"><?php echo $post->post_content ;?></pre>
            </li>
            <?php wp_reset_postdata(); endforeach; endif;?>
          </ul>
        </div>
      </div>
      
    </div>
  </section>
  <section class="admission_guide" name="guide" id="guide">
    <div class="yearn_content">
      <h3 class="yearn_title">Enrollment Guide</h3>
      <h4 class="yearn_subtitle">招生简章</h4>
      <div class="guides_content tabbar">
        <!-- <div class="tabs">
          <p class="tab active" data-index = '1'>易尔实验学校</p>
          <p class="tab" data-index = '2'>易尔幼儿园</p>
        </div> -->
        <div class="contents">
          <div class="content" data-index = '1' style="display:block">
            <?php 
              $posts = get_posts(array('numberposts' => '1','post_type' => 'post','order' =>'sort','tax_query'=>array(array('taxonomy'=>'category','terms'=>'11')),));
              if($posts): foreach($posts as $post):echo $post->post_content ;
              wp_reset_postdata(); endforeach; endif;
            ?>
          </div>
          <div class="content" data-index = '2'>
            <?php 
              $posts = get_posts(array('numberposts' => '1','post_type' => 'post','order' =>'sort','tax_query'=>array(array('taxonomy'=>'category','terms'=>'12')),));
              if($posts): foreach($posts as $post):echo $post->post_content ;
              wp_reset_postdata(); endforeach; endif;
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="apply  container-fluid" id="admission" name="admission">
    <div class="yearn_content">
      <h3 class="yearn_title">apply online</h3>
      <h4 class="yearn_subtitle">在线报名</h4>
      <form class="apply_form row form-horizontal" id="apply_form" action="<?php echo esc_url( get_template_directory_uri() ); ?>/schoolsignup/addschoolsignup.php" method="post">
        <div class="form-group">
          <!-- <label class="col-sm-2 control-label" for="name">您的姓名</label> -->
          <div >
            <input placeholder="姓名" type="text" required="" class="form-control input-lg" name="name">
          </div>
        </div>
        <!-- <div class="form-group col-sm-6">
          <label for="cname">孩子姓名：</label>
          <input type="text" required="" class="form-control input-lg" name="student_name">
        </div> -->
        <div class="form-group">
          <!-- <label class="col-sm-2 control-label">联系方式</label> -->
          <div >
            <input placeholder="手机号" type="text" required="" class="form-control input-lg" name="phone">
          </div>
        </div>
        <div class="form-group">
          <!-- <label class="col-sm-2 control-label">孩子年龄</label> -->
          <div>
            <input placeholder="孩子年龄" type="text"  required="" class="form-control input-lg" name="student_age">
          </div>
        </div>
        <div class="form-group" style="display:none;">
          <label class="col-sm-2 control-label">学校:</label>
          <div class="col-sm-10">
            <input type="text"   required="" class="form-control input-lg" name="school" value="易尔实验学校"> 
          </div>
        </div>
        <div class="form-group">
          <div>
            <button type="button" class="btn btn-primary btn-lg">提交</button>
          </div>
        </div>
      </form>
    </div>
  </section>
  <?php get_footer();?>

  <script>
    $('#apply_form .btn').click(function(){
        var formData = {
          name:$('#apply_form input[name=name]').val(),
          // student_name:$('.apply_form input[name=student_name]').val(),
          phone:$('#apply_form input[name=phone]').val(),
          student_age:$('#apply_form input[name=student_age]').val(),
          school:$('#apply_form input[name=school]').val(),
        }
        $.ajax({
          type:'post',
          url:$('#apply_form').attr('action'),
          data:formData,
          success:function(res){
            if(res == 1){
              layer.msg('提交成功，学校工作人员会在短时间内与您联系；<br>感谢关注易尔实验学校。',{
                icon:1
              })
              $('#apply_form').get(0).reset();
            }else{
              layer.msg(res,{
                icon:2
              })
            }
          }
        })
    })
  
  </script>
</html>
