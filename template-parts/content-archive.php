<?php 

/**
 * Displays each blog item on archive pages, generated by a loop
 *
 * @package WordPress
 * @subpackage Parea
 * @since 1.0
 * @version 1.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h1><a title="<?php the_title_attribute() ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

	<?php get_template_part( 'template-parts/content' , 'article-header' ); ?>

	<?php 
		if( get_post_format() == 'image' || get_post_format() == 'video' ){
			the_content();
		}else{
			the_excerpt();
		} 
	?>

	<?php edit_post_link( __( 'Edit this page' , 'parea' ), '<p>', '</p>' ); ?>	
		
</article>