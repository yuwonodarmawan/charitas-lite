<?php
/**
 * The default template for 404 error page
 *
 * @package WordPress
 * @subpackage Charitas Lite
 * @since Charitas Lite 1.0
 */
?>

<?php get_header(); ?>
<div class="item teaser-page-404">
	<div class="container_16">
		<aside class="grid_16">
			<h1 class="page-title"><?php _e('404', 'charitas-lite'); ?></h1>
			<h2><?php _e('The page you were looking for could not be found.', 'charitas-lite'); ?></h2>
		</aside>
	</div>
</div>

<div id="main" class="site-main container_16">
	<div class="inner">
		<div id="primary" class="grid_16">
			<article class="single-404">
				
				<a target="_self" class="button medium black square" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e('Go Home', 'charitas-lite'); ?></a>
				<br /><br />
				<p><?php _e('or', 'charitas-lite'); ?></p>
				<?php get_template_part( 'searchform' ); ?>
			</article>
			
		</div>

		<div class="clear"></div>
	</div>
</div>
<?php get_footer(); ?>