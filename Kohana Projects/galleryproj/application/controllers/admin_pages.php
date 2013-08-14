<?php defined('SYSPATH') OR die('No direct access allowed.');
abstract class Admin_Pages_Controller extends Template_Controller {

  public $session;

  public function  __construct() {
    parent::__construct();
    $this->session = Session::instance();
    if($this->session->get("logged_in") == false) url::redirect("guest_home");
  }
}