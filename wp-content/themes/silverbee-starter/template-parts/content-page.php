<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Silverbee_Starter
 */

?>

<article id="post-<?php the_ID(); ?>" class="post-content">
    <header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header><!-- .entry-header -->

    <section class="entry-content">
	    <?php
	    the_content();

	    wp_link_pages( array(
		    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'silverbee-starter' ),
		    'after'  => '</div>',
	    ) );
	    ?>
    </section>
</article>
