<?php include('./includes/head.inc'); ?>
<?php include('./includes/header.inc'); ?>

<!-- Body start -->
<?php $posts = $pages->find('template=article, limit=2'); ?>
<?php $pagination = $posts->renderPager(); ?>
<?php	foreach($posts->reverse() as $item) : ?>
			<h2><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></h2>
			<p><?php echo $item->article_subline; ?></p>
<?php endforeach;?>
<?php echo $pagination; ?>