<?php defined('SYSPATH') OR die('No direct access allowed.');
class Main_Controller extends Template_Controller 
{
  var $template = "template";

  public function index() 
  {
    $this->template->content = new View("main");
  }
}