<?php

	function clubitsolutions_post_types() {
		register_post_type('portfolio-item', array(
			'supports' => array(
				'title',
				'thumbnail',
				'editor',
				'excerpt',
				'comments',
				'page-attributes',
				'revisions'
			),
			'show_in_rest' => true,
			'public' => true,
			'has_archive' => true,
			'labels' => array(
				'name' => 'Portofolio-Items',
				'add_new_item' => 'Füge neues Portfolio-Item hinzu',
				'edit_item' => 'Bearbeite Portfolio-Item',
				'all_items' => 'Komplettes Portfolio',
				'singular_name' => 'Portfolio-Item'
			),
			'menu_icon' => 'dashicons-schedule'
		));

		register_post_type('tutor', array(
			'supports' => array(
				'title',
				'thumbnail',
				'editor',
				'excerpt'
			),
			'show_in_rest' => true,
			'public' => true,
			'has_archive' => true,
			'labels' => array(
				'name' => 'Tutor',
				'add_new_item' => 'Füge neuen Tutor hinzu',
				'edit_item' => 'Bearbeite Tutor',
				'all_items' => 'Alle Tutoren',
				'singular_name' => 'Tutor'
			),
			'menu_icon' => 'dashicons-welcome-learn-more'
		));
	}

	add_action('init', 'clubitsolutions_post_types');
