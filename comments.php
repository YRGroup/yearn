<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}

?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>

		<h2 class="comments-title">
			<?php
			$comments_number = get_comments_number();
      // printf('%s,共%s条评论', get_the_title(),$comments_number );
      printf('%s条留言', $comments_number );
			?>
		</h2>

		<ol class="comment-list">
			<?php
				// wp_list_comments( array(
				// 	'avatar_size' => 60,
				// 	'style'       => 'li',
					
				// 	'short_ping'  => true,
				// 	'reply_text'  => '回复',
				// ) );
				wp_list_comments( array(
					'callback'     =>  'yearn_comment',
				  ) ); 
				
			?>
		</ol>

		<?php the_comments_pagination( array(
			'prev_text' => '<span class="screen-reader-text">上一页</span>',
			'next_text' => '<span class="screen-reader-text">下一页</span>',
		) );

	endif; // Check for have_comments().

	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

	<p class="no-comments">评论功能已关闭！</p>
	</div><!-- #comments -->
	<?php
	endif;
	$cat_id_tmp =  isset( $_REQUEST['ct'])? $_REQUEST['ct']:0;
	$fields =  array(
		// 作者名称字段
    'author' =>
      '<div class="comment-form-author form_item"><label for="author">姓名</label> ' .
      '<span class="required">'.
      '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
      '" size="30"/></div>',
    // 电子邮件字段   
    'email' =>
      '<div class="comment-form-email form_item"><label for="email">邮箱</label> ' .
      '<span class="required">'.
      '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
      '" size="30"/></div>',
    );	
	$comments_args = array(
		'fields'=> $fields,
    'comment_field'=> '<div class="qua_form_group form_item">
    <label>评论</label>
		<textarea id="comments" rows="5" cols="45" class="qua_con_textarea_control" name="comment"></textarea><input name="redirect_to" id="redirect_to" type="hidden" value="'.urlencode(get_link_withcatgory(null,$cat_id_tmp,0)).'" /></p></div>',		
		'logged_in_as' => '<p class="logged-in-as">您登陆的名字为 <a href="'. admin_url( 'profile.php' ).'">'.$user_identity.'</a>'. '<a href="'. wp_logout_url( get_link_withcatgory(null,$cat_id_tmp,0) ).'" title="Logout of this account">退出登录</a>' . '</p>',
		'id_submit'=> 'submit',
		// 'label_submit'=>'发表评论',
		'comment_notes_after'=> '',
		'comment_notes_before'=>'',
		// 'title_reply'=> '<h2>请留言</h2>',
		'id_form'=> 'action',
		);

	comment_form($comments_args);

	?>




