<?php defined('SYSPATH') OR die('No direct access allowed.');
    class Expires_Controller extends Controller {

/**
 * Email practices using controllers so no need for templates.
 */

  // Sets expiring time for the browser.
  public function set() {
    expires::set();
  }

  // Checks if page needs to be refreshed
  public function check() {
    if (expires::check() == true) echo "Finish!!!";
  }

  // Returns true if expired headers have not been sent.
  public function check_headers() {
    if (expires::check_headers()) echo "Safe";
  }

  // Clears kohana output buffer.
  public function prevent_output() {
    expires::prevent_output();
  }

  public function index() {
    if (expires::check(10) == false) expires::set(10);
    $welcome = new View('test/test');
    $welcome->now = date(DATE_RFC822);
    $welcome->render(true);
  }
}