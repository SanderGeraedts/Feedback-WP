<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Silverbee_Starter
 */

get_header(); ?>
    <article>
        <section id="single" class="page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
						<?php get_sidebar(); ?>
                    </div>
                    <div class="col-6">
	                    <?php
	                    while ( have_posts() ) : the_post();

		                    get_template_part( 'template-parts/content', get_post_format() );

		                    the_post_navigation();

	                    endwhile; // End of the loop.
	                    ?>
                    </div>
                </div>
            </div>
        </section>
    </article>
<?php
get_sidebar();
get_footer();
