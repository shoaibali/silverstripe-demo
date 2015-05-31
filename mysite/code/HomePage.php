<?php
class HomePage extends BaseHomePage {

	private static $db = array(
	);

	private static $has_one = array(
	);

}
class HomePage_Controller extends BaseHomePage_Controller {
	private static $allowed_actions = array (
	);

	public function init() {
		parent::init();
		// You can include any CSS or JS required by your project here.
		// See: http://doc.silverstripe.org/framework/en/reference/requirements
	}

}
