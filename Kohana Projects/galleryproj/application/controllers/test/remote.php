<?php defined('SYSPATH') OR die('No direct access allowed.');
class Remote_Controller extends Controller {

/**
 * Rounding numbers using controllers so no need for templates.
 */

  public function status() {
    echo remote::status('http://www.google.com').'<br/>';
    echo remote::status('http://www.yahoo.com').'<br/>';
    echo remote::status('http://www.gamespot.com').'<br/>';
    echo remote::status('http://www.ask.com');
  }
}
?>