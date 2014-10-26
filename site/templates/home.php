<?php 
//	Import HTML Head
include('./includes/head.inc');

//Import header
include('./includes/header.inc');
?>

<!-- Body start -->

<section class="latest-article">
	<div class="latest-article-content">
		<h3>Latest Article</h3>
		<h2><a href="<?php echo $latest_article->url; ?>"><?php echo $latest_article->title; ?></a></h2>
		<p><?php echo $latest_article->article_subline; ?></p>
		<section class="read-more-link">
			<a href="<?php echo $latest_article->url; ?>">Read more</a>
		</section>
	</div>
</section>

<?php $posts = $pages->find('template=post, limit=2, sort=sort'); ?>
<?php $pagination = $posts->renderPager(); ?>
<?php	foreach($posts as $item) : ?>
			<h2><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></h2>
			<?php echo $item->post_date; ?>
			<p><?php echo $item->post_content; ?></p>
<?php endforeach;?>
<?php echo $pagination; ?>




<?php 
//	Import footer
include('.includes/foot.inc'); ?>
