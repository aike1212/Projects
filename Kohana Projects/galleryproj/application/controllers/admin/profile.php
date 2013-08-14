<?php defined('SYSPATH') OR die('No direct access allowed.');
class Profile_Controller extends Admin_Pages_Controller {
	var $template = "admin/main_page";

  public function index() {
    $this->display_active_images();
    $this->display_inactive_images();

    $get_user = Doctrine::getTable("Tblusers")->find($this->session->get("author"));
    if($get_user == null) Event::run("system.404");

    $image = Doctrine::getTable("Tblimages")->findAll();
    if($image == null) event::run("system.404");

    $this->template->content = new View("admin/view_profile");
    $this->template->content->img = $image;
    $this->template->content->usr = $get_user;
    $this->template->content->active_ctr = $this->active_count;
    $this->template->content->inactive_ctr = $this->inactive_count;
  }

  public function view_uploader($uploader_id) {
    $this->display_active_images();
    $this->display_inactive_images();
    $this->display_user_active_images($uploader_id);
    $this->display_user_inactive_images($uploader_id);

    if($this->input->post("deactivate_all") && $this->input->post("activate_all") == true) Event::run("system.404");
    
    if($this->input->post("deactivate_all") || $this->input->post("activate_all") == true) {
      $this->deactivate_or_activate_all($uploader_id);
    }
    
    $get_user = Doctrine::getTable("Tblusers")->find($this->session->get("author"));
    if($get_user == null) event::run("system.404");

    $get_uploader = Doctrine::getTable("Tblusers")->find($uploader_id);
    if($get_uploader == null) Event::run("system.404");
    
    if($get_uploader->id == $this->session->get("author")) {
      $this->template->content = new View("admin/view_profile");
      $this->template->content->usr = $get_user;
      $this->template->content->active_ctr = $this->active_count;
      $this->template->content->inactive_ctr = $this->inactive_count;
    } else {
      $this->template->content = new View("admin/view_uploader_profile");
      $this->template->content->uploader = $get_uploader;
      $this->template->content->user_active_images = $this->user_active_count;
      $this->template->content->user_inactive_images = $this->user_inactive_count;
    }
  }

  public function uploader_photos($usr_id) {
    $get_user = Doctrine::getTable("Tblusers")->find($usr_id);
    if($get_user == null) Event::run("system.404");
    $get_image = Doctrine::getTable("Tblimages")->findAll();
    if($get_image == null) Event::run("system.404");
    $this->template->content = new View("admin/view_uploader_photos");
    $this->template->content->user = $get_user;
    $this->template->content->image = $get_image;
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

  public function display_user_active_images($uploader_id) {
    $get_user = Doctrine::getTable("Tblusers")->find($uploader_id);
    if($get_user == null) Event::run("system.404");
    $image = Doctrine::getTable("Tblimages")->findAll();
    if($image == null) event::run("system.404");

    $this->user_active_count = '0';

    foreach($image as $img) {
      if ($img->user_id != $get_user->id) continue;
      if ($img->status != "active") continue;
      $this->user_active_count++;
    }
  }

  public function display_user_inactive_images($uploader_id) {
    $get_user = Doctrine::getTable("Tblusers")->find($uploader_id);
    if($get_user == null) Event::run("system.404");
    $image = Doctrine::getTable("Tblimages")->findAll();
    if($image == null) event::run("system.404");

    $this->user_inactive_count = '0';

    foreach($image as $img) {
      if ($img->user_id != $get_user->id) continue;
      if ($img->status != "inactive") continue;
      $this->user_inactive_count++;
    }
  }

  public function deactivate_or_activate_all($uploader_id) {
    $user = Doctrine::getTable("Tblusers")->find($uploader_id);
    if($user == null) Event::run("system.404");
    $images = Doctrine::getTable("Tblimages")->findAll();
    if($images == null) Event::run("system.404");
    
    foreach($images as $image) {
      if ($image->user_id != $user->id) continue;

      if ($this->input->post("deactivate_all") == true) {
        $image->status = "inactive";
        $image->save();
        $this->session->set("message", "All images of this user has been activated.");
      } else {
        $image->status = "active";
        $image->save();
        $this->session->set("message", "All images of this user has been activated.");
      }
    }
    url::redirect($this->input->server("HTTP_REFERER"));
  }
}