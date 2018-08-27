<?php

//文章自定义排序
// add_action('pre_get_posts', 'ludou_orderby');
// function ludou_orderby( $query ) {

//     if ( (is_home() || is_archive()) && $query->is_main_query() ) {
//         $query->set( 'meta_key', 'sort' );
//         $query->set( 'orderby', array('meta_value_num' => 'DESC', 'date' => 'DESC') );
//     }
//     return $query;
// }
//
function get_parent_page_id(){
  global $post;
  $parent_id = $post -> post_parent;
  return $parent_id;//返回父级页面的 ID
}
function is_en_page(){
  $en_parent_page_id = 530;
  $is_en_page = get_parent_page_id()== $en_parent_page_id || get_the_id() == $en_parent_page_id;
  return  $is_en_page;
}
//修改后台路径
function login_protection(){
	if($_GET['u'] != 'yearn')header('Location: http://www.yearn.com/');
	}
//	add_action('login_enqueue_scripts','login_protection');

function post_is_in_descendant_category( $cats, $_post = null )
{
foreach ( (array) $cats as $cat ) {
// get_term_children() accepts integer ID only
$descendants = get_term_children( (int) $cat, 'category');
if ( $descendants && in_category( $descendants, $_post ) )
return true;
}
return false;
}


function my_wp_head() {
  echo '<link rel="stylesheet" href="'.esc_url( get_template_directory_uri()).'/assets/css/bootstrap.min.css">';
  echo '<link rel="stylesheet" href="'.esc_url( get_template_directory_uri()).'/assets/css/animate.css">';
  echo '<link rel="stylesheet" href="'.esc_url( get_template_directory_uri()).'/assets/css/aos.css">';
  echo '<link rel="stylesheet" href="'.esc_url( get_template_directory_uri()).'/assets/css/swiper.min.css">';
  echo '<link rel="stylesheet" href="'.esc_url( get_template_directory_uri()).'/assets/css/common.css">';
  echo '<link rel="stylesheet" href="'.esc_url( get_template_directory_uri()).'/assets/css/jplayer.blue.monday.min.css">';
}
add_action('wp_head', 'my_wp_head');

function my_wp_footer() {
  echo '<script src="'.esc_url( get_template_directory_uri() ).'/assets/js/jquery2.2.4.js"></script>';
  echo '<script src="'.esc_url( get_template_directory_uri() ).'/assets/js/bootstrap.min.js"></script>';
  echo '<script src="'.esc_url( get_template_directory_uri() ).'/assets/js/aos.js"></script>';
  echo '<script src="'.esc_url( get_template_directory_uri() ).'/assets/js/jquery.scrollTo.js"></script>';
  echo '<script src="'.esc_url( get_template_directory_uri() ).'/assets/js/swiper.min.js"></script>';
  echo '<script src="'.esc_url( get_template_directory_uri() ).'/assets/js/layer.js"></script>';
  echo '<script src="'.esc_url( get_template_directory_uri() ).'/assets/js/skrollr.min.js"></script>';
  echo '<script src="'.esc_url( get_template_directory_uri() ).'/assets/js/jquery.jplayer.min.js"></script>'; 
  echo '<script src="'.esc_url( get_template_directory_uri() ).'/assets/js/common.js"></script>'; 
}
add_action( 'wp_footer', 'my_wp_footer');


require(get_template_directory().'/schoolsignup/schoolsignup.php');

add_action( 'after_setup_theme', 'yearn_setup' );

//添加缩略图支持
function yearn_setup()
{
	add_theme_support( 'post-thumbnails' );
	//添加缩略图大小类型，根据需要自行添加
	//add_image_size( 'yearn-featured-image', 2000, 1200, true );
	add_image_size( 'small_yearn', 300, 300, true );

}

//获取文章缩略图，或者第一张图片
function get_thumbnail_or_first($post = null, $size = 'post-thumbnail')
{
	if ( has_post_thumbnail($post) )
	{
	 	 return	get_the_post_thumbnail_url( $post,$size );
	} else{
	 	 return	get_first_image($post);
	}
}

//获取带类别后缀的固定链接
function get_link_withcatgory($post =null,$catid = 0,$echo=1)
{
	if ($echo)
	{
		echo  get_permalink( $post )."?ct=".$catid;
	} else{
		return  get_permalink( $post )."?ct=".$catid;
	}
	
}

//根据id获取foogallery图片列表
function get_xc_byid($id)
{
	global $wpdb;
	// $id= $wpdb->get_var($wpdb->prepare( "SELECT ID FROM $wpdb->posts WHERE post_title = %s AND post_type='foogallery'", $page_title )); 
  if($id)
  {
    $images= $wpdb->get_var($wpdb->prepare( "SELECT meta_value FROM $wpdb->postmeta WHERE post_id = %d AND meta_key='foogallery_attachments'", $id)); 
    $all_imgs=[];
    foreach (unserialize($images) as $img_id)
    {
      //_d(($wpdb->prepare( "SELECT * FROM $wpdb->posts WHERE post_id = %d AND post_type='attachment'", $img_id )));
      $img=$wpdb->get_row($wpdb->prepare( "SELECT * FROM $wpdb->posts WHERE id = %d AND post_type='attachment'", $img_id ));
      // _d($img);
      // echo var_dump($img);
      $all_imgs[]=array("ID"=>$img->ID,"content"=>$img->post_content,"title"=>$img->post_title,"excerpt"=>$img->post_excerpt,"url"=>$img->guid); 
    }
    //_d($all_imgs);
    return $all_imgs;
  }
}

//获取文章的第一张图片
function get_first_image($post) 
{
	$first_img = '';
	ob_start();
	ob_end_clean();
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	//获取文章中第一张图片的路径并输出
	$first_img = $matches [1] [0];
	if(empty($first_img)){ 
		$first_img = esc_url( get_template_directory_uri() )."/assets/images/default.png";
	}
	return $first_img;
}



//分页列表
function get_pagination() {
	$html='';
	global $wp_query, $wp_rewrite;
	
	$pagenum_link = html_entity_decode( get_pagenum_link() );

	$url_parts    = explode( '?', $pagenum_link );

	if ( true !== empty( $url_parts[0]))
	{
		if (substr($url_parts[0], -1) == "/") $url_parts[0] = substr($url_parts[0],0,-1); 
		$url_parts[0].="?";
	} 
	//return $url_parts[0];

	$pagenum_link="";

	for ( $n = 0; $n < count($url_parts); $n++ )
	{
		if(!strpos($url_parts[$n],'paged'))
		{
			$pagenum_link.=$url_parts[$n].'&';
		}
			
	}
	//return $pagenum_link;
	
	$total   = isset( $wp_query->max_num_pages ) ? $wp_query->max_num_pages : 1;
	$current = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
	
	if($total<2)
		return '';
	if ( $current && 1 < $current ) 
		$html.='<a href="'.$pagenum_link.'paged='.($current-1 ) . '">上一页</a>';
	//	return $pagenum_link.'paged='.($current-1 );
	for ( $n = 1; $n <= $total; $n++ ) 
	{
		if ( $n == $current ) 
			$html.= '<a href="#" class="current">' .$n.  "</a>";
		else 
			$html.='<a href="'. $pagenum_link.'paged='.$n  .'">' . $n. '</a>';
	}
	if ($current && $current < $total ) 
		$html.='<a href="'. $pagenum_link.'paged='.($current+1) . '">下一页</a>';
	return '<div id="pagination" class="pagination">'.$html.'</div>';
}


function _d($obj)
{
	var_dump($obj);
	exit;
}
function d($obj)
{
	var_dump($obj);
}


//文本编辑器功能增加
function add_editor_buttons($buttons) {
$buttons[] = 'fontselect';
$buttons[] = 'fontsizeselect';
$buttons[] = 'backcolor';
$buttons[] = 'underline';
$buttons[] = 'hr';
$buttons[] = 'sub';
$buttons[] = 'sup';
$buttons[] = 'cut';
$buttons[] = 'copy';
$buttons[] = 'paste';
$buttons[] = 'cleanup';
$buttons[] = 'wp_page';
$buttons[] = 'newdocument';
return $buttons;
}
add_filter("mce_buttons_3", "add_editor_buttons");


//zjf--------------- 管理后台显示ID

/**
 * 为WordPress后台的文章、分类等显示ID From wpdaxue.com
 */
// 添加一个新的列 ID
function ssid_column($cols) {
	$cols['ssid'] = 'ID';
	return $cols;
}
 
//显示 ID
function ssid_value($column_name, $id) {
	if ($column_name == 'ssid')
		echo $id;
}
 
function ssid_return_value($value, $column_name, $id) {
	if ($column_name == 'ssid')
		$value = $id;
	return $value;
}
 
// 为 ID 这列添加css 
function ssid_css() {
?>
<style type="text/css">
	#ssid { width: 50px; } /* Simply Show IDs */
</style>
<?php	
}
 
// 通过动作/过滤器输出各种表格和CSS
function ssid_add() {
	add_action('admin_head', 'ssid_css');
 
	add_filter('manage_posts_columns', 'ssid_column');
	add_action('manage_posts_custom_column', 'ssid_value', 10, 2);
 
	add_filter('manage_pages_columns', 'ssid_column');
	add_action('manage_pages_custom_column', 'ssid_value', 10, 2);
 
	add_filter('manage_media_columns', 'ssid_column');
	add_action('manage_media_custom_column', 'ssid_value', 10, 2);
 
	add_filter('manage_link-manager_columns', 'ssid_column');
	add_action('manage_link_custom_column', 'ssid_value', 10, 2);
 
	add_action('manage_edit-link-categories_columns', 'ssid_column');
	add_filter('manage_link_categories_custom_column', 'ssid_return_value', 10, 3);
 
	foreach ( get_taxonomies() as $taxonomy ) {
		add_action("manage_edit-${taxonomy}_columns", 'ssid_column');			
		add_filter("manage_${taxonomy}_custom_column", 'ssid_return_value', 10, 3);
	}
 
	add_action('manage_users_columns', 'ssid_column');
	add_filter('manage_users_custom_column', 'ssid_return_value', 10, 3);
 
	add_action('manage_edit-comments_columns', 'ssid_column');
	add_action('manage_comments_custom_column', 'ssid_value', 10, 2);
}
//------------------------显示id结束

 
/* 文章访问计数 */
function record_visitors()
{
	if (is_singular()|| is_page() || is_home())
	{
	  $post_ID = $post->ID;
	  if($post_ID )
	  {
		  $post_views = (int)get_post_meta($post_ID, 'views', true);
		  if(!update_post_meta($post_ID, 'views', ($post_views+1)))
		  {
			add_post_meta($post_ID, 'views', 1, true);
		  }
	  } else if (is_home())
	  {
		$home_views = get_option('home_views');
		 if ( $home_views ) {
			update_option( 'home_views',  $home_views+1 );
		 } else{
			add_option('home_views', 1);
		 }
	  }
	}
}
add_action('wp_head', 'record_visitors');
//去掉emoji表情包支持，需要的页面可以自己添加
remove_action( 'wp_head', 'print_emoji_detection_script',7);
 

/// 函数名称：post_views
/// 函数作用：取得文章的阅读次数
function post_views($post=null,$before = '', $after = '', $echo = 1)
{
 // global $post;
    $post = get_post( $post );
	if ( ! $post ) {
		return '';
	}
  $views = (int)get_post_meta($post->ID, 'views', true);
  if ($echo) echo $before, number_format($views), $after;
  else return $views;
}


//评论@人，不用写入数据库
function ludou_comment_add_at( $comment_text, $comment = '') {
	if( $comment->comment_parent > 0) {
	  $comment_text = '@<a href="#comment-' . $comment->comment_parent . '">'.get_comment_author( $comment->comment_parent ) . '</a> ' . $comment_text;
	}
  
	return $comment_text;
  }
  add_filter( 'comment_text' , 'ludou_comment_add_at', 20, 2);


  function get_reply_link_withcat($link )
  {
	if (!is_singular()) return $link;
	$cat_id_tmp =  isset( $_REQUEST['ct'])? $_REQUEST['ct']:0;
	$reply_link = get_link_withcatgory(null,$cat_id_tmp,0).'&';

	$link= str_replace(get_permalink().'?',$reply_link,$link);
	return $link;
  }

add_filter( 'comment_reply_link','get_reply_link_withcat', 20, 1 );


  /*
 * 评论列表的显示
 */
if ( ! function_exists( 'yearn_comment' ) ) :
	function yearn_comment( $comment, $args, $depth ) {
		
		$cat_id_tmp =  isset( $_REQUEST['ct'])? $_REQUEST['ct']:0;
	//	echo "ggggggggggggggggg".$cat_id_tmp;
		$reply_link = get_link_withcatgory(null,$cat_id_tmp,0);
		$GLOBALS['comment'] = $comment;
		switch ( $comment->comment_type ) :
			case 'pingback' :
			case 'trackback' :
			// 用不同于其它评论的方式显示 trackbacks 。
		?>
		<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
			<p><?php _e( 'Pingback:', 'bootstrapwp' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( '(Edit)', 'bootstrapwp' ), '<span class="edit-link">', '</span>' ); ?>
			</p>
		<?php
			break;
			default :
			// 开始正常的评论
			global $post;
			?>
		<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
			<article id="comment-<?php comment_ID(); ?>" class="media comment main-comment">
				<div class="pull-left">
          <div class="user_info">
            <?php // 显示评论作者头像 
            echo get_avatar( $comment, 64 ); 
            ?>
            	<p class="media-heading user-name">
              <?php // 显示评论作者名称
                printf( '%1$s %2$s',
                  get_comment_author_link(),
                  // 如果当前文章的作者也是这个评论的作者，那么会出现一个标签提示。
                  ( $comment->user_id === $post->post_author ) ? '<span class="label label-info"> ' . __( '(作者)', 'bootstrapwp' ) . '</span>' : ''
                );
              ?>
            </p>

          </div>
          <div class="media-body">
            <div class="conmment-content">
              <?php // 显示评论内容
                comment_text(); 
              ?>
              </div>
              <p class="comment-info">
                <small>
                <?php // 显示评论的发布时间
                  printf( '<time datetime="%2$s">%3$s</time>',
                    esc_url( get_comment_link( $comment->comment_ID ) ),
                    get_comment_time( 'c' ),
                    // 翻译: 1: 日期, 2: 时间
                    sprintf( __( '%1$s %2$s', 'fenikso' ), get_comment_date(), get_comment_time() )
                  );
                ?>
                </small>
                <?php // 显示评论的编辑链接 
                  edit_comment_link( '编辑', '<span class="edit-link">', '</span>' ); 
                ?>
              <span class="reply">
                <?php // 显示评论的回复链接 
                  comment_reply_link( array_merge( $args, array( 
                  'reply_text' =>  '回复', 
                  // 'after'      =>  ' <span>&darr;</span>', 
                  'depth'      =>  $depth, 
                  'max_depth'  =>  $args['max_depth'] ) ) ); 
                //	get_reply_link_withcat($args,$depth,$reply_link.'&')
                ?>
              </span>
            </p>
				</div>
			</div>
				<?php // 未审核的评论显示一行提示文字
					if ( '0' == $comment->comment_approved ) : ?>
					<p class="comment-awaiting-moderation">
					<?php _e( 'Your comment is awaiting moderation.', 'bootstrapwp' ); ?>
					</p>
				<?php endif; ?>
			</article>
		<?php
			break;
		endswitch; // end comment_type check
	}
endif;

?>
	


