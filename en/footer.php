<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Yearn
 * @since 1.0
 * @version 1.2
 */

?>    

        <section class="cbbfixed">
          <a class="gotop cbbtn"><span class="up-icon"><i class="iconfont">&#xe62f;</i></span></a>
        </section>
        <section class="yearn_map">
          <div class="yearn_content container">
            <div class="item col-md-3 hidden-sm hidden-xs">
              <h4>YUREN GROUP</h4>
              <a href="http://d.yearnedu.com/" target="_blank">郑州外国语女子中学</a>
              <a href="http://e.yearnedu.com/" target="_blank">e-BABY台湾精致早教</a>
              <a href="http://f.yearnedu.com/" target="_blank">育人宝贝幼儿园</a>
              <a href="http://a.yearnedu.com/" target="_blank">郑州航空港育人国际学校</a>
              <a href="http://b.yearnedu.com/" target="_blank">襄城育人国际学校</a>
              <a href="http://c.yearnedu.com/" target="_blank">经济技术开发区育人学校</a>
            </div>
            <div class="item col-md-3 hidden-sm hidden-xs">
              <h4>YEARN</h4>
              <p><a href="/kindergarten" target="_blank">易尔幼儿园</a></p>
              <p><a href="/nprimary" target="_blank">易尔实验学校</a></p>
              <p><a href="/natatorium" target="_blank">易尔少年游泳馆</a></p>
            </div>
            
            <div class="item col-md-3 hidden-sm hidden-xs">
              <h4>INTELLIGENT CAMPUS</h4>
              <a href="http://jkyr.yearnedu.com" target="_blank">经济技术开发区育人学校</a>
              <a href="http://hkg.yearnedu.com" target="_blank">郑州航空港育人国际学校</a>
            </div>

            <div class="item col-md-3 imgs">
              <img class="codeImg" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo/logo.png" alt="易尔实验园区">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/swim_codeImg.png" alt="易尔实验园区">
            </div>
          </div>
        </section >
        <footer class="yearn_footer">
          <p>Copyright ©2017 yearnedu.com Inc. All Rights Reserved. 郑州育人教育集团备案/许可证编号：<a  href="http://www.miibeian.gov.cn" target="_blank">豫ICP备16026588号</a></p>
        </footer><!-- #colophon -->
      </div>
    </div>
  </div>
  <!-- <label id="StranLink">简体中文</label> -->
  <?php
    wp_footer();
  ?>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/teai_ts.js" type="text/javascript"></script>
</body>
