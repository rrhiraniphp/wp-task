<?php
/**
 * Template Name: Film-Template
 *
 * This is the template to display film post type
 *
 * @package unite-child
 */
?>

<?php
get_header();

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array( 
		'post_type' => 'films', 
		'posts_per_page' => 10,
		'paged'  => $paged,
	         );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); 
 	 $meta = get_post_meta($post->ID); ?>
	  <h4><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
	
	  <div class="entry-content">
	  	<?php echo "this is customtemplate created in child theme"; ?>
	  	<?php //get_template_part( 'content', 'page' ); ?>
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
		
	  </div>

	 <?php  //echo previous_post_link() .' | '. next_post_link(); 
endwhile;  
	 	
?>

<div class="pagenav">
    <div class="alignleft"><?php $loop->previous_posts_link('Previous') ?></div>
    <div class="alignright"><?php $loop->next_posts_link('Next') ?></div>
</div>
<?php
get_footer();
?>