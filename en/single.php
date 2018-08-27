

<?php 
  $cat_id_tmp = isset( $_REQUEST['ct'])? $_REQUEST['ct']:0;
  if ( (in_category(4) && $cat_id_tmp==4)||(in_category(5) && $cat_id_tmp==5) ) {
    get_template_part('singles/single-1');
  } else {
    get_template_part('singles/single-0');
  }

?>

