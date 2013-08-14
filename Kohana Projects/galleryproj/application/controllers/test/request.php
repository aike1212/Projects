<?php defined('SYSPATH') OR die('No direct access allowed.');
class Request_Controller extends Controller {

/**
 * Rounding numbers using controllers so no need for templates.
 */

  // Referrer
  public function referrer() {
    echo request::referrer();
  }
  // Is Ajax
  public function is_ajax() {
    $animals = array('dog','cat','mouse');
    if (request::is_ajax()) {
      $this->template->auto_render = false;
      echo json_encode($animals);
    }
  }
  // Method
  public function method() {
    echo request::method();
  }
  // Accepts
  public function accepts() {
    if (request::accepts('xhtml') && request::accepts('xml') && request::accepts('rss')
      && request::accepts('atom')) {
        echo 'Client accepts all of them';
    } else {
        echo 'Client doesn\t accept one/several of xhtml, xml, rss, atom';
    }
  }
  // Preferred accept
  public function preferred_accept() {
    echo request::preferred_accept(array('xhtml','html','xml'));
  }
  // Accepts at Quality
  public function accepts_at_quality() {
    echo request::accepts_at_quality('images/1268727744Stresemann.jpg');
  }
}
?>