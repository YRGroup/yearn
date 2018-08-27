<?php

add_action('admin_menu', 'register_menu');

function register_menu() {
	  add_menu_page('报名信息', '报名信息', 'administrator', 'schoolsignuplist', 'schoolsignuplist', 'dashicons-book', 99);
}


function schoolsignuplist(){
	$page_size=15;
	$page_sizetttt=15;
	$paged=$_REQUEST['paged']==null?1:$_REQUEST['paged'];
	$filter_status=$_REQUEST['filter_status'];
	if(!$filter_status)$filter_status='wait_deal';
	$id=$_REQUEST['id'];
	$action=$_REQUEST['action'];
	if($action=='del'&&$id){
		wp_delete_post( $id, true );
	}
	if($action=='deal'&&$id){
		$post=get_post( $id);
		if($post){
			$post->post_status='dealt';
			wp_insert_post($post);
		}
	}
	
	$args= array('numberposts'=>15,'offset'=>$paged?($paged-1)*$page_size:0,'post_type'=> 'schoolsignup','post_status'=>'any');
	if($filter_status!='any')$args['post_status']=$filter_status;
	$counter = 0;//d($args );
	$posts_array = get_posts($args);
	
	
	$args['numberposts']=-1;
	$count= count(get_posts($args));
			
?>
<div class="wrap">
<h1 class="wp-heading-inline">报名信息</h1>
<hr class="wp-header-end" />
<div class="tablenav top">
<form id="posts-filter" method="get">
		<div class="alignleft actions">
		<input type="hidden" name="page" value="schoolsignuplist"/>
		<label for="filter-by-status" class="screen-reader-text">按状态筛选</label>
		<select name="filter_status" id="filter-by-status" onchange="document.getElementById('posts-filter').submit();">
			<option <?php if($filter_status=='any')echo('selected="selected"');?> value="any">全部</option>
			<option <?php if($filter_status=='wait_deal')echo('selected="selected"');?> value="wait_deal">等待处理</option>
			<option <?php if($filter_status=='dealt')echo('selected="selected"');?> value="dealt">已处理</option>
		</select>
		<input type="submit" name="filter_action" id="post-query-submit" class="button" value="筛选">		
		</div>
		<div class="tablenav-pages">
			<span class="displaying-num"><?php echo($count);?>条记录</span>
			<?php echo pagination($count,$page_size);?>
		</div>
		</form>
		<br class="clear">
	</div>
<form id="posts-filter" method="get">
   <table class="wp-list-table widefat" cellspacing="0">
				<thead>
				<tr>
				<th scope="col" class="manage-column">
						<span>序号</span>
					</th>
					<th scope="col" class="manage-column">
						<span>姓名</span>
					</th>
					<th scope="col" class="manage-column">
						<span>手机号</span>
					</th>
					<th scope="col" id="title" class="manage-column">
						学生姓名
					</th>
					<th scope="col" id="title" class="manage-column">
						学生年龄
					</th>
					<th scope="col" id="title" class="manage-column">
						学校
					</th>
					<th scope="col" id="title" class="manage-column">
						提交时间
					</th>
					<th scope="col" id="title" class="manage-column">
						状态
					</th>
					<th scope="col" id="title" class="manage-column">
						操作
					</th>
				</tr>
				</thead>
				<tbody>
			<?php
			$counter =0;
			foreach ( $posts_array as $p ) {
				
				$counter++;
				//_d($p);
				$info=unserialize($p->post_content);
				?>
				<tr class="<?php echo ($counter % 2 === 0) ? 'alternate' : ''; ?>">
					<td style="width:35px">
						<?php echo($counter+($paged-1)*15) ?>
					</td>
					<td>
						<?php echo($info->name); ?>
					</td>
					<td>
					<?php echo($info->phone); ?>
					</td>
					<td>
						<?php echo($info->student_name); ?>
					</td>
					<td>
						<?php echo($info->student_age); ?>
					</td>
					<td>
						<?php echo($info->school); ?>
					</td>
					<td>
						<?php echo($p->post_date); ?>
					</td>
					<td>
						<?php echo(get_status_str($p->post_status)); ?>
					</td>
					<td>
						<?php if($p->post_status=='wait_deal'){?>
						<a href="<?php echo(get_requesturl_arg(array('action','id')).'action=deal&id='.$p->ID); ?>" >已处理</a>
						<?php }?>
						<a href="<?php echo(get_requesturl_arg(array('action','id')).'action=del&id='.$p->ID); ?>" >删除</a>
					</td>
				</tr>
			<?php
			}
			?>
				</tbody>
			</table>
			</form>
			</div>
<?php
}

function get_requesturl_arg($exclude)
{
	$request_arg='';
	$args    = explode( '&', $_SERVER['QUERY_STRING'] );
	for ( $n = 0; $n < count($args); $n++ )
	{
		$arg_name= explode('=', $args[$n])[0];
		if($arg_name&&!in_array($arg_name,$exclude))
			$request_arg.=$args[$n].'&';
	}
	return $_SERVER['PHP_SELF']."?".$request_arg;
}
function pagination($count,$page_size) {
	$page_num=ceil($count/$page_size);
	$current = $_REQUEST['paged'] ? intval( $_REQUEST['paged'] ) : 1;
	$html='';
	
	$pagenum_link=get_requesturl_arg(array('paged'));
	//_d($pagenum_link);
	if($page_num<2)
		return '';
	if ( $current && 1 < $current ) 
		$html.='<a href="'.$pagenum_link.'paged='.($current-1 ) . '">上一页</a>';
	for ( $n = 1; $n <= $page_num; $n++ ) 
	{
		if ( $n == $current ) 
			$html.= '<a href="#" class="current">' .$n.  "</a>";
		else 
			$html.='<a href="'. $pagenum_link.'paged='.$n  .'">' . $n. '</a>';
	}
	if ($current && $current < $page_num ) 
		$html.='<a href="'. $pagenum_link.'paged='.($current+1) . '">下一页</a>';
	return $html;
}

function get_status_str($status)
{
	switch($status)
	{
		case 'wait_deal':
			return '等待处理';
		case 'dealt':
			return '已处理';
	}
	return '未知';
}

if ( ! class_exists( 'schoolsignup_model' ) ) {

	class schoolsignup_model {
		public $name;
		public $phone;
		public $student_name;
		public $student_age;
		public $school;
	}
}



register_post_status( 'wait_deal', array(
	'label'    => 'wait_deal',
	'internal' => true,
	'_builtin' => true, /* internal use only. */
	'exclude_from_search' => false,
) );
register_post_status( 'dealt', array(
	'label'    => 'dealt',
	'internal' => true,
	'_builtin' => true, /* internal use only. */
	'exclude_from_search' => false,
) );

?>