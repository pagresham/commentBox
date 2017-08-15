<?PHP
include "head.php";
$commentErrors = [];

if(isset($_POST['submit-comment'])) {
	if(isset($_SESSION['userid'])) { // is logged in //

		if(!empty($_POST['add-comment'])) { // user clicked add comment //
			// get post_id
			if(!empty($_POST['post_id'])) {
				$post_id = $_POST['post_id'];
				if(!preg_match("/^[0-9]*$/", $post_id)) {
					$commentErrors['post_id'] = "Problem with post_id for comment";
				} 
			} else {
				$commentErrors['post_id'] = "Problem with post_id for comment";
			}
			// get time
			$comment_time = date("Y-m-d H:i:s");

			// get comment
			$comment = trim($_POST['add-comment']);
			if (strlen($comment) == 0 || strlen($comment) > 1000) {
				$commentErrors['comment'] = "Comment is improper length";
			}
			else { $comment = addslashes($comment); }

			$initial_rating = 0;

			if (count($commentErrors) == 0) {

				$sql = "INSERT INTO comments
						(post_id, user_id, comment_time, rating, content)
						VALUES($post_id, $userid, '$comment_time', $initial_rating, '$comment' )";
				$rs = $db->query($sql);
				if(!$rs) {
					die("Connection Terminated: " . $db->error);
				}
				else {
					// echo "comment submitted!";
				}

			} 


		} // end add comment


	}
	
	

}
//<!-- fields in this form: add-comment, submit-comment, post_id - will also need post_time, and user_id -->//

?>

	<div class="welcome">
		<h1>My Posts</h1>
		<?PHP

		if (isset($_SESSION['username'])) {
			$sql = "SELECT * FROM posts 
					WHERE user_id = $userid";
			$rs = $db->query($sql);
			if(!$rs) {
				die("Connection Terminated: " . $db->error);
			}
			else {
				if ( $rs->num_rows > 0 ) {
					while($row = $rs->fetch_assoc()) {
						// run a function that will print a nicely formatted post to the screen //
						$title = $row['title'];
						$content = $row['content'];
						$post_time = $row['post_time'];
						$display_time = date('h:m A, M d Y', strtotime($post_time));


						$rating = $row['rating'];
						$post_id = $row['post_id'];
						writePost($title, $content, $display_time, $rating, $post_id, $username);
					}
				}
				else {
					echo "0 rows";
				}
			}
		}


		?>
	</div>
	
<?PHP
include "foot.php";
?>