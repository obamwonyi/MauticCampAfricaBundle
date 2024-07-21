<?php
return [
	'name'        => 'Mautic Camp Africa',
	'description' => 'Mautic Camp Africa plugin for Mautic',
	'version'     => '1.0',
	'author'      => 'Your Name',
	'routes'   => [
		'main' => [
			'mautic_campafricabundle_index' => [
				'path'       => '/campafricabundle',
				'controller' => 'MauticCampAfricaBundle:Default:index',
			],
		],
	],
	'menu' => [
		'main' => [
			'items' => [
				'mautic.campafricabundle.menu.index' => [
					'route'     => 'mautic_campafricabundle_index',
					'iconClass' => 'fa-globe',
					'priority'  => 70,
				],
			],
		],
	],
];
