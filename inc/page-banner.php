<div class="dz-bnr-inr style-1 overlay-white-dark" style="background-image: url(<?= $banner_img_url; ?>);">
	<div class="container">
		<div class="dz-bnr-inr-entry">
			<h1><?= $page_banner_name; ?></h1>
			<!-- Breadcrumb Row -->
			<nav aria-label="breadcrumb" class="breadcrumb-row">
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?= $baseurl; ?>">Home</a></li>
					<?php
						if (!empty($page_parent)) {
							echo '<li class="breadcrumb-item"><a href="'.$page_parent_url.'">Home</a></li>
								<li class="breadcrumb-item">'.$page_name.'</li>';
						}else{
							echo '<li class="breadcrumb-item">'.$page_name.'</li>';
						}

					?>
					
				</ul>
			</nav>
			<!-- Breadcrumb Row End -->
		</div>
	</div>
</div>