<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Silverbee_Starter
 */

get_header(); ?>
	<article>
		<section id="home" class="page">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6">
						<?php get_sidebar(); ?>
					</div>
					<div class="col-6">
                        <div id="home-content">
							<?php
							get_template_part('template-parts/content', 'newsarchive');
							?>
                        </div>
					</div>
				</div>
			</div>
		</section>
	</article>
<?php
get_footer();
