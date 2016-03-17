<?php

/*Plugin Name: My First Plugin.

Description: Show popular post.
Author: Subhasish Maanna
Version: 0.1

*/
add_action('admin_menu','myfirstplugin_admin_page');
function myfirstplugin_admin_page (){
add_options_page( 'myfirst plugin', 'my first plugin', 'manage_options', __FILE__, 'admin_pg');	
}
function admin_pg(){
	?>
	<div class="wrap">
	<h2> A post details page</h2>
	<h3>This Pluigin will search the db for all draft post and display their title ana ID</h3>
	<p>click the button to search</p>
	<br>
	<form action="" method="post">
	<input type="submit" name="search_draft_post" value="search" class="button-primary">
	</form>
	<table class="widefat">
	<thead>
	<tr>
	<th> Post Title</th>
	<th> Post ID</th>
	</tr>
	</thead>
	<tfoot>
	<tr>
	<th> Post Title</th>
	<th> Post ID</th>
	</tr>
	</tfoot>
	<tbody>
	<?php 
	global $wpdb;
	if(isset($_POST['search_draft_post'])){
	$mytestdrafts = $wpdb->get_results(
			"SELECT ID, post_title
			FROM $wpdb->posts
			WHERE post_status = 'draft'
			"
	);
	
foreach ($mytestdrafts as $mytestdraft){
?>
<tr>
<?php 
echo '<td>'.$mytestdraft->post_title.'</td>';
echo '<td>'.$mytestdraft->ID.'</td>';

?>
</tr>
	<?php }} ?>

</tbody>
</div>
	
	<?php
	
}