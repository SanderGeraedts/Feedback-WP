<?php
$paged     = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args  = array(
	'post_type'        => 'post',
	'posts_per_page'   => - 1,
	'post_status'      => 'publish',
	'orderby'          => 'date',
	'order'            => 'DESC',
	'paged'            => $paged,
	"suppress_filters" => 0
);
$posts = new WP_Query( $args );

if ( $posts->have_posts() ) :

	while ( $posts->have_posts() ) :

		$posts->the_post();
		$post_id = get_the_ID();

		?>

		<h1><?php the_title(); ?></h1>

	<?php
	endwhile;
	?>

    <div class="pagination">
		<?php
		$paginate_links = paginate_links( array(
			'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
			'total'        => $arr_posts->max_num_pages,
			'current'      => max( 1, get_query_var( 'paged' ) ),
			'format'       => '?paged=%#%',
			'show_all'     => false,
			'type'         => 'array',
			'end_size'     => 2,
			'mid_size'     => 1,
			'prev_next'    => true,
			'add_args'     => false,
			'add_fragment' => '',
		) );
		foreach ( $paginate_links as $pgl ) {
			echo " $pgl " . "<span class='divider'> - </span> ";
		}
		?>
    </div>

<?php
endif;
?>
