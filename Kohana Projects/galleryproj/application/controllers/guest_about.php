<?php defined('SYSPATH') OR die('No direct access allowed.');
class Guest_About_Controller extends Template_Controller {
  var $template = "guest_main_page";

  public function index() {
//    Doctrine::generateModelsFromDb('application/models/doctrine', array('doctrine'), array('generateTableClasses' => true));
    $this->template->content = new View("about");
  }
}