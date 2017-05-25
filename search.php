<?php
/**
 * The default template for search results
 *
 * @package WordPress
 * @subpackage Charitas Lite
 * @since Charitas Lite 1.0
 */
?>

<?php get_header(); ?>
	<div class="item teaser-page-list">
		<div class="container_16">
			<aside class="grid_10">
				<h1 class="page-title"><?php _e('Search Results for:', 'charitas-lite'); ?> '<?php echo get_search_query(); ?>'</h1>
			</aside>
			<?php if ( ot_get_option('charitas_breadcrumbs') != "off") { ?>
				<div class="grid_6">
					<div id="rootline">
						<?php charitas_breadcrumbs(); ?>	
					</div>
				</div>
			<?php } ?>
			<div class="clear"></div>
		</div>
	</div>
	
	<div id="main" class="site-main container_16">
		<div class="inner">
			<div id="primary" class="grid_11 suffix_1">
				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'content', 'search' ); ?>
					<?php endwhile; ?>

				<?php else : ?>
					<?php get_template_part( 'content', 'none' ); ?>
				<?php endif; ?>

				<?php charitas_content_navigation('postnav' ) ?>
			</div>
	
			<?php get_sidebar(); ?>
			<div class="clear"></div>
		</div>
	</div>
<?php get_footer(); ?>