<?php /* Default template for displaying page content */ ?>
<article id="page-<?php the_ID(); ?>" <?php post_class('mh-content-wrapper'); ?>>
	<div class="entry-content clearfix">
		<?php the_content(); ?>
	</div>
</article>