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
		<li><a href="<?php echo $homepage->url; ?>"><img src="<?php echo $site_logo; ?>"></a></li>
		<li><h1><a href="<?php echo $homepage->url; ?>"><?php echo $site_title; ?></a></h1></li>
	</ul>
</div>
</header>