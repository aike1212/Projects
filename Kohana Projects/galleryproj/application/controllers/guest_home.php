<?php defined('SYSPATH') OR die('No direct access allowed.');
class Guest_Home_Controller extends Template_Controller
{
  var $template = "guest_main_page";

  public function index()
  {
    $tbl = new Tblcontents();
    $content = $tbl->guest_content();
    $rule = $tbl->guest_rules();

    $this->template->content = new View("statements");
    $this->template->content->content = $content;
    $this->template->content->rules = $rule;
  }
}