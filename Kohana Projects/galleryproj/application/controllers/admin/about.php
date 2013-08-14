<?php defined('SYSPATH') OR die('No direct access allowed.');
class About_Controller extends Admin_Pages_Controller {
  var $template = "admin/main_page";

  public function index() {
    $this->template->content = new View("admin/about");
  }
}