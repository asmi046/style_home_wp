<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/favicons/icon256.png" sizes="256x256">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/favicons/icon128.png" sizes="128x128">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/favicons/icon64.png" sizes="64x64">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/favicons/icon32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/favicons/icon16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/favicons/fav.svg" sizes="any">

    <title><?php wp_title(); ?></title>

    <?php wp_head();?>
	
	<script type="text/javascript" async src="https://app.uiscom.ru/static/cs.min.js?k=4Udhb3Zrne6gc_P9dBEgBhPFzXXoX45A"></script>
	
</head>
    <body>

    <?php get_template_part('template-parts/modal-win');?>
    <?php get_template_part('template-parts/calc-form');?>

    <?php get_template_part('template-parts/section-header');?>
    
    
		