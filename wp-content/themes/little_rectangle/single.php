<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Little Rectangle
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

		<?php edit_post_link( __( 'Edit', 'little_rectangle' ), '<span class="edit-link"><i class="ss-icon">', '</i></span>'); ?>

			<header class="entry-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<div class="entry-meta">
					<p><?php the_date('m/d/Y'); ?></p>
				</div>
			</header>

			<?php if (get_field("logo_color")) { ?>
			<style>.site-title a{background: url(/wp-content/themes/little_rectangle/images/little-rectangle-<?php echo get_field("logo_color"); ?>.png) no-repeat;}</style>
			<?php } ?>

			<?php while(the_flexible_field("stripes")): ?>

				<?php get_template_part( 'stripe', get_row_layout() ) ?>
			 
			<?php endwhile; ?>

			<?php little_rectangle_content_nav( 'nav-below' ); ?>

			<?php

				if ( comments_open() || '0' != get_comments_number() )
					comments_template();
			?>

		<?php endwhile; ?>

		</div>
	</div>
	
<?php get_footer(); ?>