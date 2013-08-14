<?php defined('SYSPATH') OR die('No direct access allowed.');
class Profile_Controller extends Admin_Pages_Controller {
	var $template = "user/main_page";

  public function index() {
    $this->display_active_images();
    $this->display_inactive_images();
    
    $get_user = Doctrine::getTable("Tblusers")->find($this->session->get("author"));
    if($get_user == null) Event::run("system.404");
    
    $this->template->content = new View("user/view_profile");
    $this->template->content->usr = $get_user;
    $this->template->content->active_ctr = $this->active_count;
    $this->template->content->inactive_ctr = $this->inactive_count;
  }
  
  public function display_active_images() {
    $get_user = Doctrine::getTable("Tblusers")->find($this->session->get("author"));
    if($get_user == null) Event::run("system.404");
    $image = Doctrine::getTable("Tblimages")->findAll();
    if($image == null) event::run("system.404");

    $this->active_count = '0';

    foreach($image as $img) {
      if ($img->user_id != $get_user->id) continue;
      if ($img->status != "active") continue;
      $this->active_count++;
    }
  }

  public function display_inactive_images() {
    $get_user = Doctrine::getTable("Tblusers")->find($this->session->get("author"));
    if($get_user == null) Event::run("system.404");
    $image = Doctrine::getTable("Tblimages")->findAll();
    if($image == null) event::run("system.404");

    $this->inactive_count = '0';

    foreach($image as $img) {
      if ($img->user_id != $get_user->id) continue;
      if ($img->status != "inactive") continue;
      $this->inactive_count++;
    }
  }

}