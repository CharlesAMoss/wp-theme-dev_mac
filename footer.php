<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 */
?>
		</div><?php //END #main ?>

	<?php if ( is_active_sidebar( 'left-sidebar' ) ) : ?>
		<div id="left-sidebar" class="sidebar col-sm-3 col-md-pull-9 clearfix" role="complementary">
			<?php dynamic_sidebar( 'left-sidebar' ); ?>
		</div>
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>
		<div id="right-sidebar" class="sidebar col-sm-3 clearfix" role="complementary">
			<?php dynamic_sidebar( 'right-sidebar' ); ?>
		</div>
	<?php endif; ?>

		</div><?php //END #inner-content ?>

	</div><?php //END #content ?>

	<footer id="colophon" class="footer" role="contentinfo">

		<div id="inner-footer" class="wrap clearfix">

			<nav role="navigation">
				<?php mactheme_footer_nav(); ?>
			</nav>

			<div id="footer-sidebar" class="secondary">
				<div id="footer-sidebar1">
					<?php
					if(is_active_sidebar('footer-sidebar-1')){
					dynamic_sidebar('footer-sidebar-1');
					}
					?>
				</div>
				<div id="footer-sidebar2">
					<?php
					if(is_active_sidebar('footer-sidebar-2')){
					dynamic_sidebar('footer-sidebar-2');
					}
				?>
				</div>
				<div id="footer-sidebar3">
					<?php
					if(is_active_sidebar('footer-sidebar-3')){
					dynamic_sidebar('footer-sidebar-3');
					}
					?>
				</div>
			</div>

			<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>

		</div>

	</footer>

	<p id="back-top">
        <a href="#top"><i class="fa fa-angle-up"></i></a>
    </p>

</div><?php //END #container ?>

<?php wp_footer(); ?>

</body>
</html>
