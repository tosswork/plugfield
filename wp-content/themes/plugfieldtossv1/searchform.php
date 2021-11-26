<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
  <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Digite aqui', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" /><input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'BUSCAR', 'submit button' ) ?>" />
	<?php if(isset($_REQUEST['post_type']) || isset($_REQUEST['cat'])){
	$filtro= (isset($_REQUEST['post_type']))?($_REQUEST['post_type']):($_REQUEST['cat']); ?>
		<input type="hidden" name="<?php echo (isset($_REQUEST['post_type']))?'post_type':'cat';?>" value="<?php echo $filtro;?>">
	<?php }
	?>
</form>
