<?php defined('SYSPATH') OR die('No direct access allowed.');
class Gallery_Controller extends Admin_Pages_Controller {
  var $template = "admin/main_page";

  public function index() {
    $items = new Tblimages();
    $get_image = $items->search($this->input->get("keyword"), $this->input->get("page"), "active");
    $this->template->content = new View("guest_gallery");
    $this->template->content->photo = $get_image->execute();

    $this->pagination = new Pagination(array(
      'total_items' => $get_image->count(),
      'items_per_page' => '30',
      'query_string' => "page",
      'style' => 'classic'
    ));
  }
}