<?php defined('SYSPATH') OR die('No direct access allowed.');
class Model_Controller extends Controller {

  public function index() {
    $q = new Tblimages();
    $r = $q->getSql();
    die (Kohana::debug($r));
  }
}