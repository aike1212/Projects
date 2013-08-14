<?php defined('SYSPATH') OR die('No direct access allowed.');
class Manage_Users_Controller extends Admin_Pages_Controller {
  var $template = "admin/main_page";

  public function index() {
    $table_counter = '0';
    $user = new Tblusers();
    $get_user = $user->list_of_users($this->input->get("keyword"), $this->input->get("page"));
    $this->template->content = new View("admin/manage_users");
    $this->template->content->tbl_ctr = $table_counter;
    $this->template->content->users = $get_user->execute();

    $this->pagination = new Pagination(array(
      'total_items' => $get_user->count(),
      'items_per_page' => '33',
      'query_string' => "page",
      'style' => 'classic'
    ));
  }
}