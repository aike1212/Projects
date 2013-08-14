<?php defined('SYSPATH') OR die ('No direct access allowed.');
class Home_Controller extends Admin_Pages_Controller {
    var $template = "user/main_page";

    public function index() {
//        die("y?");
        $this->template->content = new View("user/statements");
    }
}