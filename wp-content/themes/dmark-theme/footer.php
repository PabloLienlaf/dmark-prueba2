<?php if ( has_nav_menu( 'footer-menu' ) ) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'footer-menu' ) ); ?>
<?php } ?>

<footer class="bg-dark text-white py-3">
	<div class="container">
		¿Cómo llegar?
		<?php if (is_active_sidebar('footer-widget')) { ?>
			<?php dynamic_sidebar('footer-widget'); ?>
		<?php }; ?>
	</div>
</footer>

<?php wp_footer() ?>
</body>
</html>
