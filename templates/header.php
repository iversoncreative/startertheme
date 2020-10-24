<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white shadow-sm" id="navbar-main">
    <div class="container">
	    <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
		<button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><i class="far fa-bars fa-fw" id="navbar-toggle-icon"></i><span class="sr-only">Toggle navigation</span></button>
		<?php if (has_nav_menu('primary_navigation')) :
			wp_nav_menu( array(
			    'theme_location' => 'primary_navigation',
			    'depth' => 2, // 1 = no dropdowns, 2 = with dropdowns.
			    'container' => 'div',
			    'container_class' => 'collapse navbar-collapse',
			    'container_id' => 'navcol-1',
			    'menu_class' => 'nav navbar-nav ml-auto',
			    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
			    'walker' => new WP_Bootstrap_Navwalker(),
			));
		endif; ?>
    </div>
</nav>
