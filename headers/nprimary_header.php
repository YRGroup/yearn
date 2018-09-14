<?php
/**
 * 小学 header
 * The header for our primary
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
  

  <!-- <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/fullpage.css"> -->
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/nprimary.css">
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/jquery.fullpage.css">
  <title><?php echo get_option('blogname').'-易尔实验学校';?></title>
</head>
<body >
  <div class="yearn_header_mobile">
    <div class="model_top">
      <a href="/nprimary"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo/primaryschoolLogo.png" alt="logo"></a>
      <div id="burgerBtn"></div>
    </div>
  </div>
