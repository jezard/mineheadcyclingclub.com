<form action="/" method="get" class="search-form">
	<input type="text" placeholder="Search our site..." name="s" id="search" value="<?php the_search_query(); ?>" />
	<div class="nav-image-container">
		<input type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/theme-images/search-glass.png" />
	</div>
</form>