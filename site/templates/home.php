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
	foreach($pages->get('/post-wrapper/')->children as $item) :
		//	Only display posts with the 'post' template active
		if($item->template->id == $templates->get('post')->id) : ?>
			<h1><?php echo $item->title; ?></h1>
			<p><?php echo $item->post_content; ?></p>
		
		<?php endif;?>
<?php endforeach;?>


<?php 
//	Import footer
include('.includes/foot.inc'); ?>
