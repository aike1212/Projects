<?php defined('SYSPATH') OR die('No direct access allowed.');
class Welcome_Controller extends Admin_Pages_Controller {
	var $template = "user/main_page";

	public function index() {
            $this->template->content = new View("user/welcome");
	}
}