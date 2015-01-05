<?php

if (Configure::read('debug') > 0) {
	Configure::write('Braintree.environment', 'sandbox');
} else {
	Configure::write('Braintree.environment', 'production');
}

Configure::write('Braintree.merchantId', true); // stub
Configure::write('Braintree.publicKey', true); // stub
Configure::write('Braintree.privateKey', true); // stub


/**
 * Routes
 *
 * Braintree_routes.php will be loaded in main app/config/routes.php file.
 */
Croogo::hookRoutes('Braintree');

/**
 * Behavior
 *
 * This plugin's Braintree behavior will be attached whenever Node model is loaded.
 */
//Croogo::hookBehavior('Node', 'Braintree.Braintree', array());

/**
 * Component
 *
 * This plugin's Braintree component will be loaded in ALL controllers.
 */
//Croogo::hookComponent('*', 'Braintree.Braintree');

/**
 * Helper
 *
 * This plugin's Braintree helper will be loaded via NodesController.
 */
//Croogo::hookHelper('Nodes', 'Braintree.Braintree');

/**
 * Admin menu (navigation) OLD DEFAULT STRING WILL BE APPENDED BELOW:
 */
 
CroogoNav::add(
	'Braintree', array(
	'title' => 'Braintree',
	'url' => '#',
	'children' => array(
		'Settings' => array(
			'title' => 'Settings',
			'url' => array(
				'admin' => true,
				'plugin' => 'Braintree',
				'controller' => 'Braintree',
				'action' => 'index',
			),
				'children'=>array(
					'Settings' => array(
					'title' => 'Settings',
					'url' => array(
						'admin' => true,
						'plugin' => 'braintree',
						'controller' => 'braintree_settings',
						'action' => 'index',
					)),
					'Merchant' => array(
					'title' => 'Merchant',
					'url' => array(
						'admin' => true,
						'plugin' => 'Braintree',
						'controller' => 'Merchant',
						'action' => 'index',
					),
					'children'=> array(
						'List' => array(
							'title' => 'List',
							'url' => array(
								'admin' => true,
								'plugin' => 'braintree',
								'controller' => 'braintree_merchants',
								'action' => 'index',
							),
						),
						'Add' => array(
							'title' => 'Add',
							'url' => array(
								'admin' => true,
								'plugin' => 'braintree',
								'controller' => 'braintree_merchants',
								'action' => 'add',
							),
						),
					)
				),
			)
			
		),
		'Customers' => array(
			'title' => 'Customers',
			'url' => '#',
			'children'=> array(
				'List' => array(
					'title' => 'List',
					'url' => array(
						'admin' => true,
						'plugin' => 'braintree',
						'controller' => 'braintree_customers',
						'action' => 'index',
					),
				),
				'Add' => array(
					'title' => 'Add',
					'url' => array(
						'admin' => true,
						'plugin' => 'braintree',
						'controller' => 'braintree_customers',
						'action' => 'add',
					),
				),
			)
		),
		'CreditCards' => array(
			'title' => 'Credit Cards',
			'url' => array(
				'admin' => true,
				'plugin' => 'Braintree',
				'controller' => 'braintree_credit_cards',
				'action' => 'index',
			),
			'children'=> array(
				'List' => array(
					'title' => 'List',
					'url' => array(
						'admin' => true,
						'plugin' => 'braintree',
						'controller' => 'braintree_credit_cards',
						'action' => 'index',
					),
				),
				'Add' => array(
					'title' => 'Add',
					'url' => array(
						'admin' => true,
						'plugin' => 'braintree',
						'controller' => 'braintree_credit_cards',
						'action' => 'add',
					),
				),
			)
		),
		'Transactions' => array(
			'title' => 'Transactions',
			'url' => '#',
			'children'=> array(
				'List' => array(
					'title' => 'List',
					'url' => array(
						'admin' => true,
						'plugin' => 'braintree',
						'controller' => 'braintree_transactions',
						'action' => 'index',
					),
				),
				'Add' => array(
					'title' => 'Add',
					'url' => array(
						'admin' => true,
						'plugin' => 'braintree',
						'controller' => 'braintree_transactions',
						'action' => 'admin)add',
					),
				),
			)
		),
		'Addresses' => array(
			'title' => 'Addresses',
			'url' => array(
				'admin' => true,
				'plugin' => 'Braintree',
				'controller' => 'Braintree',
				'action' => 'braintree_addresses',
			),
			'children'=> array(
				'List' => array(
					'title' => 'List',
					'url' => array(
						'admin' => true,
						'plugin' => 'braintree',
						'controller' => 'braintree_addresses',
						'action' => 'index',
					),
				),
				'Add' => array(
					'title' => 'Add',
					'url' => array(
						'admin' => true,
						'plugin' => 'braintree',
						'controller' => 'braintree_addresses',
						'action' => 'add',
					),
				),
			)
		),
	),
));

$Localization = new L10n();

//This will need to be custom also set in the field type

Croogo::mergeConfig('Wysiwyg.actions', array(
	'Braintree/admin_rte_Braintree' => array(
		array(
			'elements' => 'BraintreeBasic',
			'preset' => 'basic',
		),
		array(
			'elements' => 'BraintreeStandard',
			'preset' => 'standard',
			'language' => 'ja',
		),
		array(
			'elements' => 'BraintreeFull',
			'preset' => 'full',
			'language' => $Localization->map(Configure::read('Site.locale')),
		),
		array(
			'elements' => 'BraintreeCustom',
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
 * an extra link called 'Braintree' will be placed under 'Actions' column.
 */
 
/* 
Croogo::hookAdminRowAction('Nodes/admin_index', 'Braintree', 'plugin:Braintree/controller:Braintree/action:index/:id');
*/
/* Row action with link options */
/*
Croogo::hookAdminRowAction('Nodes/admin_index', 'Button with Icon', array(
	'plugin:Braintree/controller:Braintree/action:index/:id' => array(
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
	'plugin:Braintree/controller:Braintree/action:index/:id' => array(
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
 * an extra tab with title 'Braintree' will be shown with markup generated from the plugin's admin_tab_node element.
 *
 * Useful for adding form extra form fields to OTHER MODELS if necessary.
 */


Croogo::hookAdminTab('Users/admin_add', 'Payment Info', 'Braintree.admin_tab_user');
Croogo::hookAdminTab('Users/admin_edit', 'Payment Info', 'Braintree.admin_tab_user');

CroogoNav::add('Braintree', 
			array(
			'title' => 'Braintree',
			'url' => '#',
			'children' => array(
				)));