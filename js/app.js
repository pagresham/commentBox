$(function() {

	// listener for add-comment button on main post entry //
	$("button[id^='add-comment']").click(function() {
		// when add-comment is clicked, comment dialog toggle slides out //
		var postId = this.id.replace("add-comment", "");
		$("#submit-comment" + postId).toggle("fade");
	})
	



})