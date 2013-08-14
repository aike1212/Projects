<?php defined('SYSPATH') OR die('No direct access allowed.');
class Edit_Profile_Controller extends Admin_Pages_Controller {
  var $template = "user/main_page";

	public function index() {
    $this->update();
    $get_user = Doctrine::getTable("Tblusers")->find($this->session->get("author"));
    if($get_user == null) Event::run("system.404");
    $this->template->content = new View("user/profile");
    $this->template->content->usr = $get_user;
  }

  public function update() {
    if($this->input->post() == false) return;
    $usr = Doctrine::getTable("Tblusers")->find($this->input->post("user_id"));
    $usr->fromArray($this->input->post());
    $usr->last_name = $this->input->post("lastname");
    $usr->first_name = $this->input->post("firstname");
    $usr->email = $this->input->post("email");
    $usr->birthday = date("Y-m-d", $this->input->post("birth"));
    $usr->contact_number = $this->input->post("contact_no");
    $usr->save();
    $this->session->set("message", "All changes have been saved.");
    url::redirect("user/profile");
  }
}