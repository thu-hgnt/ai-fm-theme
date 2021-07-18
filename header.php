<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package appside
 */

?>
<!doctype html>
<html>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo AIFM_CSS . '/bootstrap.min.css '?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <?php wp_head(); ?>
</head>

<body>
    <div id="page" class="site">
        <header>
            <?php get_template_part('template-parts/header/header'); ?>
        </header>
        <div id="content" class="site-content py-5">