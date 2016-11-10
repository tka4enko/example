<?php
/**
 * Theme Name: SiteName
 * Theme URI: SiteName
 * Description: SiteName design
 * Author: alex_dev
 * Author URI: SiteName
 */ ?>
<!doctype html>
<html lang="ru">
<head>
    <!--=== META TAGS ===-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <?php $author_id=$post->post_author; ?>
    <meta name="author" content="<?php echo the_author_meta('display_name',  $author_id );?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta content="telephone=no" name="format-detection">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!--function add navbar-->
    <?php
        wp_nav_menu( array(
            'theme_location' => 'header_menu',
            'menu_class' => 'nav nav-left',
            'container' => false
        ));
    ?>
<!--function add navbar-->