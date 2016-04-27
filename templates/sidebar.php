<?php
// If it's not the Porting page, then show...
if(!is_single('porting')) { ?>
<div class="well">
	<h3>Porting Info</h3>
	<p>Looking to transfer your number to your new phone?</p>
	<p>Check out our guide:</p>
	<a href="<?php bloginfo('url');?>/porting" class="button-yellow">View</a>
</div>
} ?>

<?php dynamic_sidebar('sidebar-primary'); ?>
