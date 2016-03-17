
	<footer>
	<div class="grid_12 omega clearfix">
		<div class="grid_4 footer-left">
		<?php  if(dynamic_sidebar( 'footer_left' )){
			
			
			
		}?>
		</div>
		<div id="twitter" class="grid_4">
		<?php  if(dynamic_sidebar( 'footer_center' )){
			
			
			
		} ?>
		</div>
		<div id="twitter" class="grid_4 ">
		<?php  if(dynamic_sidebar( 'footer_right' )){
			
			
			
		}?>
		</div>
	</div>
	
				<div id="copyright">
			<p>&copy; Copyright <?php echo date('Y'); ?> <a href="#">Treehouse</a>. All Rights Reserved.</p>
		<div class="grid_12 ss-icon omega">
				<a href="#">&#xF610;</a>
				<a href="#">&#xF611;</a>
				<a href="#">&#xF612;</a>
				<a href="#">&#xF613;</a>
				<a href="#">&#xF660;</a>
				<a href="#">&#x2709;</a>
		</div>
		</div>
	</footer>
</body>
<?php wp_footer(); ?>	
</html>