<?php defined('SYSPATH') OR die('No direct access allowed.');
class Cookie_Controller extends Controller {

/**
 * Cookie manipulation practices using controllers so no need for templates.
 */

  public function cookie() {
    $cookie_array = array(
      'name'=>'Very_Important_Cookie',
      'value'=>'Chocolate Flavored Mint Delight',
      'expire'=>'86500',
      'domain'=>'.example.com',
      'path'=>'/'
    );
//    cookie::set($cookie_array);
    cookie::get($cookie_array, $default_value = null, $xss_clean = false);
//    cookie::delete($cookie_array);
  }

}
