<form role="search" method="get" action="<?= esc_url(home_url('/')); ?>">
	<label class="sr-only"><?php _e('Search for:', 'sage'); ?></label>
	<div class="input-group">
		<input type="search" value="<?= get_search_query(); ?>" name="s" class="form-control" placeholder="<?php _e('Search...', 'sage'); ?>" required>
		<span class="input-group-append">
			<button type="submit" class="btn btn-primary"><i class="far fa-search"></i> <span class="sr-only">Search</span></button>
		</span>
	</div>
</form>