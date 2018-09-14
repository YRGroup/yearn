<?php


include($_SERVER['DOCUMENT_ROOT'].'\wp-load.php' );

define('WP_USE_THEMES', false);


// set header for json mime type
header('Content-type: application/json;');

$pid= isset( $_REQUEST['pid'])? $_REQUEST['pid']:0;
$aid= isset( $_REQUEST['aid'])? $_REQUEST['aid']:0;


[foogallery id="1002"]
exit;

$posts = get_posts(array('numberposts' => '4','post_type' => 'post','tax_query'=>array(array('taxonomy'=>'category','terms'=>'2')),));


$jsonpost = array();
if ($posts ) {	

    foreach ( $posts as $post)
	{
	
	//	echo the_post();
        // construct our array for json
        // apply_filters to content to process shortcodes, etc
        $jsonpost["id"] = $post->id;
        $jsonpost["title"] = $post->title;
        $jsonpost["url"] = apply_filters('the_permalink', get_permalink($post));
        // $jsonpost["content"] = apply_filters('the_content', get_the_content());

        $images = get_children( array( 'post_parent' => $post->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC', 'numberposts' => 999 ) );
        if ( $images ) {
        $total_images = count( $images );
            $image = array_shift( $images );
            $jsonpost['featured_image'] = wp_get_attachment_image( $image->ID, 'thumbnail' );
        }

        $jsonpost["content"] = $post->content;

        // would rather do iso 8601, but not supported in gwt (yet)
        $jsonpost["date"] = get_the_time('d F Y');

        $jsonposts[] = $jsonpost; 
	wp_reset_postdata(); 
	}
    

  

} else {
  // deal with no posts returned
}

// output json to file

header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');
echo json_encode($jsonposts);
exit;

if($aid != 0)
{
	echo "请输入姓名和手机号！";
	exit;
}

if($pid == 0)
{
	echo "请输入姓名和手机号！";
	exit;
}

if($pid != 0)
{
	echo "请输入姓名和手机号！";
	exit;
}


	echo "未找到文章";
	exit;


?>