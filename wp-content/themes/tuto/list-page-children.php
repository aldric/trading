<?php /* Template Name: List Page Children */ ?>


<?php 


if (!function_exists('tuto_getPageChildren')) {
 function tuto_getPageChildren( $page_id, $post_type = 'page' ) {
        // Set up the objects needed
        $custom_wp_query = new WP_Query();
        $all_wp_pages    = $custom_wp_query->query( array( 'post_type' => $post_type, 'posts_per_page' => -1 ) );

        // Filter through all pages and find specified page's children
        $page_children = get_page_children( $page_id, $all_wp_pages );

        return $page_children;
    }
}
	$pages = tuto_getPageChildren(get_the_ID());

if ( ! empty( $pages ) ) {
	 foreach ( (array) $pages as $s ) {
        $page = $s->ID;
        $page_data = get_page($page);
          echo has_post_thumbnail($page_data).'ff<br/>'; 
		   $content = $page_data->post_excerpt;
		   echo $content;
    }
 
}
//	foreach($pages as $a) {
//		echo has_post_thumbnail($page->ID);
		/*if (has_post_thumbnail( $page->ID ) ) {
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'single-post-thumbnail' ); 
		    echo '<div id="custom-bg" style="background-image: url('. $image . ')"></div>' ;
		}
		echo esc_html($page->post_excerpt);
		*/
//	}
?>