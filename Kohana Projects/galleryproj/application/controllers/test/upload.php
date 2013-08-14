<?php defined('SYSPATH') OR die('No direct access allowed.');
class Upload_Controller extends Controller {

/**
 * Rounding numbers using controllers so no need for templates.
 */

  public function upload() {
    $files = Validation::factory($_FILES)->add_rules('picture','upload::valid',
            'upload::required', 'upload::type[gif,jpg,png]', 'upload::size[5M]');

    echo form::upload($files);
    if ($files->validate()) {
      $filename = upload::save('picture');
      Image::factory($filename)
        ->resize(100,100,Image::WIDTH)
        ->save(DOCROOT.'images/'.basename($filename).'.jpg');
      unlink($filename);
    }
  }
}
?>
