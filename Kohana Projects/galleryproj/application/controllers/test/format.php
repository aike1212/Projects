<?php defined('SYSPATH') OR die('No direct access allowed.');
class Format_Controller extends Controller {

/**
 * Form manipulation using controllers so no need for templates.
 */

  public function format() {
    echo format::phone('0917507208').'<br/>';
    echo format::url('w3schools.com');
  }
}