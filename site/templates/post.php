<?php include('./includes/head.inc'); ?>
<?php include('./includes/header.inc'); ?>

<h1><?php echo $page->title; ?></h1>
<p><?php echo $page->post_content; ?></p>

<section>
	<img src="<?php echo $pages->get('/author-info/')->author_portrait->url; ?>">
	<p><?php echo $pages->get('/author-info/')->author_text; ?></p>
</section>

<?php include('./includes/foot.inc'); ?>