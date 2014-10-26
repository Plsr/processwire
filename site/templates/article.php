<?php include('./incliudes/head.inc'); ?>
<?php include('./includes/header.inc'); //Change with article header later ?>

<h1><?php echo $page->title; ?></h1>
<p><?php echo $page->article_subline; ?></p>
<p><?php echo $page->article_content; ?></p>

<section>
	<img src="<?php echo $pages->get('/author-info/')->author_portrait->url; ?>">
	<p><?php echo $pages->get('/author-info/')->author_text; ?></p>
</section>