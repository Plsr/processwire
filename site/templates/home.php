<?php 
//	Import HTML Head
include('./includes/head.inc');

//Import header
include('./includes/header.inc');
?>

<!-- Body start -->
<?php $posts = $pages->find('template=post, limit=2'); ?>
<?php $pagination = $posts->renderPager(); ?>
<?php	foreach($posts as $item) : ?>
			<h1><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></h1>
			<?php echo $item->post_date; ?>
			<p><?php echo $item->post_content; ?></p>
<?php endforeach;?>
<?php echo $pagination; ?>




<?php 
//	Import footer
include('.includes/foot.inc'); ?>
