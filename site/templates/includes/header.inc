<header style="background-image: url('<?php echo $site_title_image; ?>')">
<nav>
	<ul>
		<?php 
		//	top navigation consists of homepage and its visible children
		//	write external function for this?
		foreach($homepage->and($homepage->children) as $item) {
			//	Exclude home link from Nav
			if(!($item->id == $homepage->id)) {
				if($item->id == $page->rootParent->id) {
					echo "<li class='current'>";
				} else { 
					echo "<li>";
				}
				echo "<a href='$item->url'>$item->title</a></li>";
			}
		}
		?>
	</ul>
</nav>
<div class="branding">
	<ul>
		<li><img src="<?php echo $site_logo; ?>"></li>
		<li><?php echo $site_title; ?></li>
	</ul>
</div>
</header>