		<section class="main">
			<h3>Videos</h3>
			<?php
			   define('PAGE_ID', '241163052690431');
			   define('APP_ID','');
			   define('APP_SECRET','');
			   include("includes/phpcUrl.php");
			   $face = new FacePageAlbum(PAGE_ID, $_GET['aid'], $_GET['aurl'], APP_ID, APP_SECRET);
			?>
		</section>