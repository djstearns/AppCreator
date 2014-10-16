<?php
App::uses('AppHelper', 'View/Helper');
/**
 * BraintreeTransparentRedirect Helper File
 *
 * Copyright (c) 2010 Anthony Putignano
 *
 * Distributed under the terms of the MIT License.
 * Redistributions of files must retain the above copyright notice.
 *
 * PHP version 5.2
 * CakePHP version 1.3
 *
 * @package    braintree
 * @subpackage braintree.views.helpers
 * @copyright  2010 Anthony Putignano <anthonyp@xonatek.com>
 * @license    http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link       http://github.com/anthonyp/braintree
 */

/**
 * BraintreeTransparentRedirect Helper Class
 *
 * @package    braintree
 * @subpackage braintree.views.helpers
 */

//require(APP . 'Plugin' . DS . 'Braintree'. DS . 'Vendor' . DS . 'braintree' . DS . 'braintree.php');
App::import(
    'Vendor',
    'Braintree.braintree',
    array('file' => 'braintree' . DS . 'braintree.php')
);

//App::import('braintree', 'Braintree.Vendor');
class BraintreeTransparentRedirectHelper extends Braintree_TransparentRedirect {
	
/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array(
		'Html',
		'Croogo.Layout',
		'Nodes' => array('className' => 'Nodes.Nodes'),
	);
	
/**
 * Construct
 *
 * @return	void
 */
	public function __construct () {
	}
	
	/**
 * Before render callback. Called before the view file is rendered.
 *
 * @return void
 */
	public function beforeRender($viewFile) {
	}

/**
 * After render callback. Called after the view file is rendered
 * but before the layout has been rendered.
 *
 * @return void
 */
	public function afterRender($viewFile) {
	}

/**
 * Before layout callback. Called before the layout is rendered.
 *
 * @return void
 */
	public function beforeLayout($layoutFile) {
	}

/**
 * After layout callback. Called after the layout has rendered.
 *
 * @return void
 */
	public function afterLayout($layoutFile) {
	}

/**
 * Called after LayoutHelper::setNode()
 *
 * @return void
 */
	public function afterSetNode() {
		// field values can be changed from hooks
		//$this->Nodes->field('title', $this->Nodes->field('title') . ' [Modified by ExampleHelper]');
	}

/**
 * Called before LayoutHelper::nodeInfo()
 *
 * @return string
 */
	public function beforeNodeInfo() {
		//return '<p>beforeNodeInfo</p>';
	}

/**
 * Called after LayoutHelper::nodeInfo()
 *
 * @return string
 */
	public function afterNodeInfo() {
		//return '<p>afterNodeInfo</p>';
	}

/**
 * Called before LayoutHelper::nodeBody()
 *
 * @return string
 */
	public function beforeNodeBody() {
		//return '<p>beforeNodeBody</p>';
	}

/**
 * Called after LayoutHelper::nodeBody()
 *
 * @return string
 */
	public function afterNodeBody() {
		//return '<p>afterNodeBody</p>';
	}

/**
 * Called before LayoutHelper::nodeMoreInfo()
 *
 * @return string
 */
	public function beforeNodeMoreInfo() {
		//return '<p>beforeNodeMoreInfo</p>';
	}

/**
 * Called after LayoutHelper::nodeMoreInfo()
 *
 * @return string
 */
	public function afterNodeMoreInfo() {
		//return '<p>afterNodeMoreInfo</p>';
	}
	
}
?>