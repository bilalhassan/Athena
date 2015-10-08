<?php

if ( ! is_active_sidebar( 'sidebar-homepage' ) ) {
	return;
}
?>

<div id="athena-overlay" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-homepage' ); ?>
</div>
