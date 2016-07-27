<?php get_header(); ?>
<div class="mh-wrapper clearfix">
<?php
if ( function_exists('yoast_breadcrumb') ) {
     yoast_breadcrumb('<p id="breadcrumbs">','</p>');
}
?>
    <div id="main-content" class="mh-content"><?php
    	while (have_posts()) : the_post();
			tuto_before_page_content();
			get_template_part('content', 'page');
			comments_template();
		endwhile; ?>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>