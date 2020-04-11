<form role="search" method="get" class="searchform" action="<?php echo home_url( '/' ); ?>">
	<label>
		<!--<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>-->
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'キーワードで検索', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
	
	<input type="image" class="search-submit"  al="" value="" src="<?php echo get_template_directory_uri(); ?>/img/search.svg" />
	</label>
</form>