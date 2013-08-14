<?php defined('SYSPATH') OR die('No direct access allowed.');
class Manage_Photos_Controller extends Admin_Pages_Controller {
  var $template = "admin/main_page";

  public function index() {
    $table_counter = '0';
    $images = new Tblimages();
    $get_image = $images->list_of_images($this->input->get("keyword"), $this->input->get("page"));
    $this->template->content = new View("admin/manage_photos");
    $this->template->content->tbl_ctr = $table_counter;
    $this->template->content->image = $get_image->execute();

    $this->pagination = new Pagination(array(
      'total_items' => $get_image->count(),
      'items_per_page' => '33',
      'query_string' => "page",
      'style' => 'classic'
    ));
  }
}

