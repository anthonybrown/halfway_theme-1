
<footer>

	<div id='footer-nav'>
		<ul>
			<?php wp_list_pages('link_after= / &title_li='); ?>
		</ul>
	</div>		 

<p class='copy'>Copy right 2010 - <?php echo date('Y'); ?> <strong><?php bloginfo('name'); ?> All rights reserved.</strong></p>

	<?php
		/* Always have wp_footer() just before the closing </body>
		 * tag of your theme, or you will break many plugins, which
		 * generally use this hook to reference JavaScript files.
		 */

		wp_footer();
	?>

</footer>
</div>
</body>
</html>