<?php defined('SYSPATH') OR die('No direct access allowed.');
class Url_Controller extends Controller {

/**
 * Rounding numbers using controllers so no need for templates.
 */

  // Base
  public function base() {
    echo url::base().'<br/>';
    echo url::base(true, 'http');
  }

  // Site
  public function site() {
    echo url::site().'<br/>';
    echo url::site('test/text/censor', 'http');
  }

  // Current
  public function current() {
    echo url::current().'<br/>';
    echo url::current(true);
  }

  // Title
  public function title() {
    echo url::title('This is a title . . . ','_');
  }

  // Redirect
  public function redirect() {
    url::redirect('guest_about','301');
  }
}
?>
