<?PHP

function writePost($title, $content, $post_time, $rating, $post_id, $username) {
	


	print "<div class='user-post'>";

	print "<div class='row'>
			<div class='col-sm-8 post-title post-info'><p>Title: " . $title . "</p></div>
			<div class='col-sm-4 post-time'><p>Posted: ". $post_time ."</p></div></div>"; // end row
			
	print "<p class='well'>Post Body: " . $content . "</p>";
	print "<p>Author: " . $username . "</p>";
	print "<div class='pull-left'><p>Rating: ". $rating ."</p></div>";

	print "<div class='text-right'><button id='add-comment".$post_id."'  class='btn btn-xs btn-default'>Add Comment</button></div>";

	print "</div>";	

	?>
	<div <?PHP echo "id='submit-comment". $post_id ."'" ?> class="dont-show">
		<div class="new-comment">
		<form method="post" action="myPosts.php">
		
		<h4>Add a comment below</h4>
		<div class="form-group">
			<textarea class="form-control" name="add-comment" id="add-comment" maxlength="1000"></textarea>	
		</div>
		<div class="form-group text-right">
			<input class="btn btn-xs btn-default " type="submit" name="submit-comment" value="Post Comment">
		</div>
		<input type="hidden" name="post_id" <?PHP print "value='". $post_id."'" ?> >
		</form>
		<!-- fields in this form: add-comment, submit-comment, post_id - will also need post_time, and user_id -->
	</div>
	</div>
	
	<?PHP


	// Run function to show comments //
}


?>
