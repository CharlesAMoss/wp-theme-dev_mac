<?php get_header(); ?>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

						<header class="article-header">

							<h1 class="entry-title page-title"><?php the_title(); ?></h1>
							<p>Posted on <?php the_date();?></p>
						</header>

						<section class="entry-content clearfix">
							<?php //the_content(); ?>

							<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail();
							} ?>
							<?php the_excerpt(); ?>
							<a href="<?php echo get_permalink(); ?>"> Read More...</a>
							<?php // wp_link_pages( array(
								// 'before'      => '<div class="page-links"><span class="page-links-title">' . __(
								// 'Pages:', 'mactheme' ) . '</span>',
								// 'after'       => '</div>',
								// 'link_before' => '<span>',
								// 'link_after'  => '</span>',
							  // ) ); ?>
						</section>
						<section class="entry-content clearfix">
								<?php echo do_shortcode(' [ecs-list-events]'); ?>
						</section>


						<!-- <footer class="article-footer">

							<?php //the_tags('<p class="tags"><span class="tags-title">Tags:</span> ', ', ', '</p>'); ?>

						</footer> -->

						<?php
							// If comments are open or we have at least one comment, load up the comment template
						  // if ( comments_open() || '0' != get_comments_number() ) :
							// comments_template();
							// endif;
						?>

					</article>

				<?php endwhile; ?>

			<?php else : ?>

			<?php get_template_part('includes/template','error'); // WordPress template error message ?>

			<?php endif; ?>

<?php get_footer();
