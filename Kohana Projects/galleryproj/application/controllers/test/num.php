<?php defined('SYSPATH') OR die('No direct access allowed.');
class Num_Controller extends Controller {

/**
 * Rounding numbers using controllers so no need for templates.
 */

  public function num() {
    $number = array(1,3,5,9,99,999);
    print num::round($number,5);
  }
}
?>
