
<?php   
  /**
 * Template Name: en-招聘
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
get_template_part('en/headers/news_header')?>
  <section class="page_content recruit_page">
    <section class="recruit_banner"  data-0="background-position-y:45%;" data-top-bottom="background-position-y:90%">
      <!-- <div class="title">
        <h1 class="yearn_content">易尔招聘</h1>
      </div> -->
    </section>
    <section class="boon">
      <div class="yearn_content">
      <h2 class="yearn_title">staff welfare</h2>
      <h3 class="yearn_subtitle">员工福利</h3>
      <ul>
        <li>
          <div class="sharp">
            <i class="iconfont">&#xe635;</i>
          </div>
          <p>定期培训</p>
        </li>
        <li>
          <div class="sharp">
            <i class="iconfont">&#xe66a;</i>
          </div>
          <p>节假福利</p>
        </li>
        <li>
          <div class="sharp">
            <i class="iconfont">&#xe60b;</i>
          </div>
          <p>带薪休假</p>
        </li>
        <li>
          <div class="sharp">
            <i class="iconfont">&#xe730;</i>
          </div>
          <p>免费工餐</p>
        </li>
        <li>
          <div class="sharp"> <i class="iconfont">&#xe612;</i></div>
          <p>子女入学</p>
        </li>
        <li>
          <div class="sharp">
            <i class="iconfont">&#xe60c;</i>
          </div>
          <p>团队活动</p>
        </li>
      </ul>
      </div>
    </section>
    <section class="positions">
      <div class="yearn_content">
        <h2 class="yearn_title">Recruiting Position</h2>
        <h3 class="yearn_subtitle"> 招聘岗位</h3>
        <ul class="recruit_list  slide_list">
          <?php $posts = get_posts(array('numberposts' => '-1','post_type' => 'post','tax_query'=>array(array('taxonomy'=>'category','terms'=>'7')),));?>
          <?php if($posts): foreach($posts as $post): ?>		
          <li class="item">
            <h4 class="item_title slide_title">
              <?php the_title();?>
              <i class="iconfont">&#xea13;</i>
            </h4>
            <pre class="item_content slide_title"><?php echo $post->post_content ;?></pre>
          </li>
          <?php wp_reset_postdata(); endforeach; endif;?>
        </ul>
      </div>
    </section>

    <section class="boon">
      <div class="yearn_content tag"> 
        <h2 class="yearn_title">Application Method</h2>
        <h3 class="yearn_subtitle">应聘方式</h3>
        <div class="yearn_tag">
        请将简历发送至邮箱<span class="email">hr@yearn.cn</span>,邮件中请注明“毕业学校+学历+专业+应聘岗位”<br>
          或者在<a  class="email" href="http://company.zhaopin.com/CC289708131.htm" target="blank">智联招聘</a>直接投递
        </div>
      </div>
    </section>

  </section>
  <?php get_template_part('templates/baidumap' );?>
  <?php get_footer();?>
  <script type="text/javascript" src="//api.map.baidu.com/api?key=&v=1.0&services=true"></script>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/baiduMap.js"></script>
</html>
