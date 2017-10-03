<?php if (  $wp_query->max_num_pages > 1 ) : ?>
	<script>
		var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
		var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
		var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
		var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
	</script>
	<div class="uk-loadmore uk-margin-small-bottom uk-width-1-1 uk-flex uk-flex-center uk-flex-wrap">
		<button id="true_loadmore_news"  class=" uk-text-uppercase ">load more</button>
	</div>
<?php endif; ?>
