<?php $dir = get_template_directory_uri() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body>
<script>
    const WPParams = {
        lazy: JSON.parse(`<?= json_encode( array(
			'ajaxurl'      => site_url() . '/wp-admin/admin-ajax.php',
			'current_page' => get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1,
			'max_page'     => $wp_query->max_num_pages,
		) ) ?>`)
    }
</script>
<div id="app">