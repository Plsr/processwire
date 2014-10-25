<?php 
//	Import HTML Head
include('./includes/head.inc');

//Import header
include('./includes/header.inc');
?>

<!-- Body start -->

<?php
	//	Main Loop of the page.
	//	Gets all posts from the post-wrapper page and displays their contents
	foreach($pages->get('/post-wrapper/')->children as $item) {
		//	Only display posts with the 'post' template active
		if($item->template->id == $templates->get('post')->id){
			echo $item->title;
			echo $item->post_content;
		}
	}
?>


<?php 
//	Import footer
include('.includes/foot.inc'); ?>
