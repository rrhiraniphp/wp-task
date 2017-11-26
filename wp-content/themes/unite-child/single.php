<?php
/**
 * The Template for displaying all single posts.
 *
 * @package unite
 */

get_header(); ?>

	<div id="primary" class="content-area col-sm-12 col-md-8 <?php echo of_get_option( 'site_layout' ); ?>">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			

		<?php 
		 if(!empty($post->post_type) && $post->post_type == 'films'){ ?>
       				 	<h4><?php the_title(); ?></h4>
       				 	<?php the_content();  ?>
	             <?php echo "Ticket Price : ".  get_field( "ticket_price", $post->ID ) . "<br>"; ?>
	             <?php 
		             $format_in = 'Ymd'; // the format your value is saved in (set in the field options)
			$format_out = 'd-m-Y'; // the format you want to end up with
			$date = DateTime::createFromFormat($format_in, get_field('release_date'));
			echo "Release Date : ". $date->format( $format_out ); 
    		?>
		 <?php $terms = wp_get_post_terms( $post->ID, array( 'genres', 'years' ,'actors') ); ?>
		
		<?php $array = [];
		foreach ( $terms as $term ) {
			$array[$term->taxonomy][] = $term->name;
		 } ?>
		 
		 <?php if(!empty($array)){
		 	foreach($array as $tax=>$taxvalue_array){
		 		echo "<p>". $tax . " : ".  implode(', ',$taxvalue_array) .  "</p>";
		 	}
		 } ?>
		<?php	}else{ ?>
			<?php get_template_part( 'content', 'single' ); ?>
			<?php unite_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			} ?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>