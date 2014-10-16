<?php
/**
 * Routes
 *
 * Facebook_routes.php will be loaded in main app/config/routes.php file.
 */
Croogo::hookRoutes('Facebook');

/**
 * Behavior
 *
 * This plugin's Facebook behavior will be attached whenever Node model is loaded.
 */
//Croogo::hookBehavior('Node', 'Facebook.Facebook', array());

/**
 * Component
 *
 * This plugin's Facebook component will be loaded in ALL controllers.
 */
//Croogo::hookComponent('*', 'Facebook.Facebook');

/**
 * Helper
 *
 * This plugin's Facebook helper will be loaded via NodesController.
 */
//Croogo::hookHelper('Nodes', 'Facebook.Facebook');

/**
 * Admin menu (navigation) OLD DEFAULT STRING WILL BE APPENDED BELOW:
 */
 /*
CroogoNav::add('extensions.children.Facebook', array(
	'title' => 'Facebook',
	'url' => '#',
	'children' => array(
		'Facebook1' => array(
			'title' => 'Facebook 1',
			'url' => array(
				'admin' => true,
				'plugin' => 'Facebook',
				'controller' => 'Facebook',
				'action' => 'index',
			),
		),
		'Facebook2' => array(
			'title' => 'Facebook 2 with a title that won\'t fit in the sidebar',
			'url' => '#',
			'children' => array(
				'Facebook-2-1' => array(
					'title' => 'Facebook 2-1',
					'url' => '#',
					'children' => array(
						'Facebook-2-1-1' => array(
							'title' => 'Facebook 2-1-1',
							'url' => '#',
							'children' => array(
								'Facebook-2-1-1-1' => array(
									'title' => 'Facebook 2-1-1-1',
								),
							),
						),
					),
				),
			),
		),
		'Facebook3' => array(
			'title' => 'Chooser Facebook',
			'url' => array(
				'admin' => true,
				'plugin' => 'Facebook',
				'controller' => 'Facebook',
				'action' => 'chooser',
			),
		),
		'Facebook4' => array(
			'title' => 'RTE Facebook',
			'url' => array(
				'admin' => true,
				'plugin' => 'Facebook',
				'controller' => 'Facebook',
				'action' => 'rte_Facebook',
			),
		),
	),
));
*/
$Localization = new L10n();

//This will need to be custom also set in the field type

Croogo::mergeConfig('Wysiwyg.actions', array(
	'Facebook/admin_rte_Facebook' => array(
		array(
			'elements' => 'FacebookBasic',
			'preset' => 'basic',
		),
		array(
			'elements' => 'FacebookStandard',
			'preset' => 'standard',
			'language' => 'ja',
		),
		array(
			'elements' => 'FacebookFull',
			'preset' => 'full',
			'language' => $Localization->map(Configure::read('Site.locale')),
		),
		array(
			'elements' => 'FacebookCustom',
			'toolbar' => array(
				array('Format', 'Bold', 'Italic'),
				array('Copy', 'Paste'),
			),
			'uiColor' => '#ffe79a',
			'language' => 'fr',
		),
	),
));

/**
 * Admin row action
 *
 * When browsing the content list in admin panel (Content > List),
 * an extra link called 'Facebook' will be placed under 'Actions' column.
 */
 
/* 
Croogo::hookAdminRowAction('Nodes/admin_index', 'Facebook', 'plugin:Facebook/controller:Facebook/action:index/:id');
*/
/* Row action with link options */
/*
Croogo::hookAdminRowAction('Nodes/admin_index', 'Button with Icon', array(
	'plugin:Facebook/controller:Facebook/action:index/:id' => array(
		'options' => array(
			'icon' => 'key',
			'button' => 'success',
		),
	),
));
*/
/* Row action with icon */
/*
Croogo::hookAdminRowAction('Nodes/admin_index', 'Icon Only', array(
	'plugin:Facebook/controller:Facebook/action:index/:id' => array(
		'title' => false,
		'options' => array(
			'icon' => 'picture',
			'tooltip' => array(
				'data-title' => 'A nice and simple action with tooltip',
				'data-placement' => 'left',
			),
		),
	),
));
*/
/**
 * Admin tab
 *
 * When adding/editing Content (Nodes),
 * an extra tab with title 'Facebook' will be shown with markup generated from the plugin's admin_tab_node element.
 *
 * Useful for adding form extra form fields to OTHER MODELS if necessary.
 */
 
 /*
Croogo::hookAdminTab('Nodes/admin_add', 'Facebook', 'Facebook.admin_tab_node');
Croogo::hookAdminTab('Nodes/admin_edit', 'Facebook', 'Facebook.admin_tab_node');
*/
CroogoNav::add('Facebook', 
			array(
			'title' => 'Facebook',
			'url' => '#',
			'children' => array(
				)));