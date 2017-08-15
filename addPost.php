<?PHP
include "head.php";

$date = date("Y/m/d") . "   "  . date("h:i:sa");
$date = "";
$errors = [];
$errorMsg = $comment = $title = "";

if (isset($_POST['submit_post'])) {
	if( !empty($_POST['title'])) {
		$title = trim($_POST['title']);
		if(strlen($title) == 0 || strlen($title) > 100) {
			$errors['title'] = "Improper title length";
		} else {
			

		}
	}
	else {
		$errors['title'] = "Title is a required field";
	}


	if( !empty($_POST['body'])) {
		$body = trim($_POST['body']);
		if(strlen($body) == 0 || strlen($body) > 1000) {
			$errors['body'] = "Improper body length.";
		} else {
			

		} 
	}
	else {
		$errors['body'] = "Please enter content for the Post body.";
	}

	

	if ( count($errors) == 0 ) {
		// proceed with DB insertion //
		
		$date = date("Y-m-d H:i:s");
		$rating = 0;

		$title = addslashes($title);
		$body = addslashes($body);

		$sql = "INSERT INTO posts 
				(user_id, title, content,  rating, post_time) 
				values('$userid', '$title', '$body', '$rating', '$date')";

		if ( $db->query($sql)) {
			// successfuly submitted //
		} else {
			die("Terminated " . $db->error);
		}



	}
	else {
		$errorMsg = "There are errors in your Post form";
	}

}



?>

<!-- Wrap labels and form controls in <div class="form-group"> (needed for optimum spacing)
Add class .form-control to all textual <input>, <textarea>, and <select> elements -->


<div class="welcome">
	<h1>Add Posts</h1>
</div>

<div class="new-post">
	<form method="post" action="addPost.php">
		
	
	<div>
		<h4 class="text-left post-info">User:<?PHP echo (isset($_SESSION['username'])) ? $username : "Not logged In" ?> </h4>
		<h4 class="text-right post-info-right"><span class="date-span"></span><span class="clock-span"></span></h4>
	</div>
	<div>
		<div class="form-group">
			<label for="title">Title:</label>	
		</div>
		<div class="form-group">
			<input class="form-control" type="text" name="title" id="title" maxlength="100">
		</div>
		
	</div>
	<div>
		
		<div class="form-group">
			<label for="body">Body:</label>
		</div>
		
				
		<div class="form-group">
			<textarea class="post-textarea form-control" name="body" id="body" maxlength="1000"></textarea>
		</div>
		<div class=form-group>
			<input class="btn btn-default" type="submit" name="submit_post">
		</div>
		
	</div>
	</form>

	




</div>



	
<?PHP
include "foot.php";
?>