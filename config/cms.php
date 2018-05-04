<?php

	return [
		'theme' => [

			'folder' => 'themes',
			'active' => 'default'
		],
		'templates' => [

			'home' => EddiesBlog\Templates\HomeTemplate::class,
			'blog' => EddiesBlog\Templates\BlogTemplate::class,
			'blog.post' => EddiesBlog\Templates\BlogPostTemplate::class,

		]

	];