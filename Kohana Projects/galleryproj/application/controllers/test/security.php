<?php defined('SYSPATH') OR die('No direct access allowed.');
class Security_Controller extends Controller {

/**
 * Rounding numbers using controllers so no need for templates.
 */

  public function strip_image_tags() {
    $string = '<b>Check this image:</b> <img src = "http://www.example.com/example.jpg"/>';
    print Kohana::debug(security::strip_image_tags($string));
  }
  // Encode PHP tags
  public function encode_php_tags() {
    $string = '<?php echo "<b>Hello World!!</b>" ?>';
    print Kohana::debug(security::encode_php_tags($string));
  }
}
