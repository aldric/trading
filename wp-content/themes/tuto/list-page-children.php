<?php /* Template Name: List Page Children */ ?>


<?php $args = array(
	'sort_order' => 'asc',
	'sort_column' => 'post_title',
	'hierarchical' => 1,
	'exclude' => '',
	'include' => '',
	'meta_key' => '',
	'meta_value' => '',
	'authors' => '',
	'child_of' => get_the_ID(),
	'parent' => -1,
	'exclude_tree' => '',
	'number' => '',
	'offset' => 0,
	'post_type' => 'page',
	'post_status' => 'publish'
); 
$pages = get_pages($args); 

	foreach($pages as $page) :
		if (has_post_thumbnail( $page->ID ) ): ?>
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'single-post-thumbnail' ); ?>
		<div id="custom-bg" style="background-image: url('<?php echo $image[0]; ?>')">

		</div>
		<?php endif; ?>
		<?php esc_html($page->post_excerpt) ?>
	<?php endforeach;?>