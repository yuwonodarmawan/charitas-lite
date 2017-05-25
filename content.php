<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage Charitas Lite
 * @since Charitas Lite 1.0
 */

?>
<?php if( is_single()) { ?>
	
	<article id="post-<?php the_ID(); ?>" <?php post_class("single"); ?>>
		<div class="entry-content">
			
			<?php if ( has_post_thumbnail() ) { ?>
				<figure>
					<?php the_post_thumbnail('charitas-lite-big-thumb'); ?>
				</figure> 
			<?php } ?>
			
			<div class="clear"></div>

			<div class="long-description">
				<?php the_content(); ?>
				<?php wp_link_pages( array( 'before' => '<div class="clear"></div><div class="page-link"><span>' . __( 'Pages:', 'charitas-lite' ) . '</span>', 'after' => '</div>' ) ); ?>
			</div>

			
			<div class="clear"></div>
			
			<div class="entry-meta-press">

				<!-- Date -->
				<?php if ( get_theme_mod('wplook_date_single_post') !='off' ){  ?>
					<time class="entry-date fleft" datetime="<?php echo esc_html(get_the_date( 'c' ) ) ?>">
						<i class="icon-calendar"></i> <?php esc_html(charitas_get_date_time()); ?>
					</time>
				<?php } ?>
				
				<!-- Category -->
				<?php if ( get_theme_mod('wplook_category_single_post') !='off' ){  ?>
					<div class="category-i fleft">
						<i class="icon-folder"></i> <?php the_category(', ') ?>
					</div>
				<?php } ?>


				<?php if ( get_the_tag_list( '', ', ' ) ) { ?>
					<div class="tag-i fleft"> 
						<i class="icon-tags"></i> <a href="#" rel="tag"><?php echo get_the_tag_list('',', ',''); ?></a> 
					</div>
				<?php } ?>

				<!-- Author -->
				<?php if ( get_theme_mod('wplook_author_single_post') !='off' ){  ?>
					<div class="author-i">
						<i class="icon-user"></i> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo get_the_author(); ?></a>
					</div>
				<?php } ?>
				<div class="clear"></div>
			</div>

		</div>
		<div class="clear"></div>
	</article>

	<?php comments_template( '', true ); ?>

<?php } else { ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class("list"); ?>>
		<div class="short-content">
			
			<?php if ( has_post_thumbnail() ) {?>
				<figure>
				<a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('charitas-lite-small-thumb'); ?>
					<div class="mask radius">
						<div class="mask-square"><i class="icon-link"></i></div>
					</div>
				</a>
				</figure> 
			<?php } ?>
			
			<h1 class="entry-header">
				<a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</h1>
			<div class="short-description">
				<?php if(strpos(get_the_content(),'#more-')) {
					the_content( sprintf( __( 'Continue reading %s', 'charitas-lite' ), the_title( '<span class="screen-reader-text">', '</span>', false ) ) );
				} else {
					echo "<p>";
					echo charitas_short_excerpt('40');
					echo "</p>";
				} ?>
				<?php wp_link_pages( array( 'before' => '<div class="clear"></div><div class="page-link"><span>' . __( 'Pages:', 'charitas-lite' ) . '</span>', 'after' => '</div>' ) ); ?>
			</div>

			

			<div class="entry-meta">
				<!-- Date -->
				<?php if ( get_theme_mod('wplook_date_blog_post') !='off' ){  ?>
					<time datetime="<?php echo esc_html(get_the_date( 'c' ) ) ?>">
						<a class="buttons time fleft" href="<?php the_permalink(); ?>"><i class="icon-calendar"></i> <?php esc_html(charitas_get_date_time()); ?></a>
					</time>
				<?php } ?>

				<!-- Author -->
				<?php if ( get_theme_mod('wplook_author_blog_post') !='off' ){  ?>
					<a class="buttons author fleft" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><i class="icon-user"></i> <?php echo get_the_author(); ?></a> 
				<?php } ?>
				
				<a class="buttons fright" href="<?php the_permalink(); ?>" title="<?php _e('read more', 'charitas-lite'); ?>"><?php _e('read more', 'charitas-lite'); ?></a>
			</div>
			<div class="clear"></div>

		</div>
		<div class="clear"></div>
	</article>
<?php } ?>	