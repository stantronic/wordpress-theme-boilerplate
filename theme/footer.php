<?php
/**
 * Created by PhpStorm.
 * User: Stanton
 * Date: 31/07/2018
 * Time: 19:02
 */
?>
    <!doctype html>
    <html class="no-js" lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">
        <link rel="stylesheet" href="https://d1azc1qln24ryf.cloudfront.net/114779/Socicon/style-cf.css?9ukd8d">
        <title><?php wp_title('|', true, 'right');
            bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>>

<div class="wrapper">
    <div class="row header-row">
        <div class="site-header columns small justify-content-center">
            <div class="header-container col-sm-1">
                <img class="header-logo" src="<?php echo get_template_directory_uri() ?>/assets/logo.jpg"/>
            </div>
            <div class="col-sm-5 site-title">
                <a class="site-title-text" href="<? bloginfo('url'); ?>"><? bloginfo('name'); ?></a>
            </div>
            <div class="nav-container col-sm-6">
                <?php $args = [
                    'menu' => 'header-menu',
                    'menu_class' => 'nav navbar-nav',
                    'container' => false
                ];
                wp_nav_menu($args); ?>
            </div>
        </div>
    </div>
<?php