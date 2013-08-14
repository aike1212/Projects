<?php defined('SYSPATH') OR die('No direct access allowed.');
class Login_Controller extends Template_Controller {
  var $template = "login";

  public function index() {

    $session = Session::instance();

    $user = new Tblusers();
    $result = $user->get_user_by_login($this->input->post("user"), $this->input->post("pass"));

    if($result != null)
    {
      $session->set("logged_in",true);
      $session->set("logged_in_user","{$result->first_name} {$result->last_name}");
      $session->set("logs",$result->logins);
      $session->set("author",$result->id);
      $session->set("admin",$result->is_admin);

      if ($result->status == "inactive") url::redirect("login");
      $result->is_admin == 1 ? url::redirect("admin/home") : url::redirect("user/home");
    }
  }
}
?>