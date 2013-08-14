<?php defined('SYSPATH') OR die('No direct access allowed.');
class Change_Password_Controller extends Admin_Pages_Controller {
  var $template = "user/main_page";

  public function index() {
    $this->update();
    $get_user = Doctrine::getTable("Tblusers")->find($this->session->get("author"));
    if($get_user == null) Event::run("system.404");
    $this->template->content = new View("user/change_password");
    $this->template->content->usr = $get_user;
  }

  public function update() {
    if($this->input->post() == null) return;
    $usr = Doctrine::getTable("Tblusers")->find($this->input->post("user_id"));
    $usr->fromArray($this->input->post());
    $usr->password = $this->input->post("confirm_pass");
    $usr->save();
    $this->session->set("message","All changes have been saved.");
    url::redirect("user/profile");
  }
}