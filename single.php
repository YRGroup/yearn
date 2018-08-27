

<?php 
  $cat_id_tmp = isset( $_REQUEST['ct'])? $_REQUEST['ct']:0;
  $cat = get_query_var('cat');
  if ( (in_category(4) && $cat_id_tmp==4)||(in_category(5) && $cat_id_tmp==5) ) {
    //中文课程模板
    get_template_part('singles/single-1');
  } elseif((in_category(14) && $cat_id_tmp==14)||(in_category(15) && $cat_id_tmp==15)) {
    //英语课程模板
    get_template_part('en/singles/single-1');
  }elseif(in_category(13)){
    //英文新闻动态模板
    get_template_part('en/singles/single-0');
  }else{
    //中文新闻动态模板
    get_template_part('singles/single-0');
  }

?>

