<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Silverbee_Starter
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <!--    get analytics script-->
	<?php get_template_part( 'template-parts/analytics/content', 'head' ); ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!--    get analytics script-->
<?php get_template_part( 'template-parts/analytics/content', 'body' ); ?>
<div id="page" class="site">
    <header id="masthead" class="site-header" role="banner">
        <div id="primary-header">
            <article>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6">
                            <section class="site-branding">
                                <h1>Silverbee Starter Underscores</h1>
                            </section><!-- .site-branding -->
                        </div>
                        <div class="col-6">
                            <nav id="site-navigation" class="main-navigation">
				                <?php
				                wp_nav_menu( array(
					                'theme_location' => 'menu-1',
					                'menu_id'        => 'primary-menu',
				                ) );
				                ?>
                            </nav><!-- #site-navigation -->
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </header><!-- #masthead -->

    <main>
        <div id="content" class="site-content">
