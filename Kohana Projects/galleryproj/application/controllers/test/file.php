

<?php defined('SYSPATH') OR die('No direct access allowed.');
class File_Controller extends Controller {

/**
 * File manipulation using controllers so no need for templates.
 */

  // Sets expiring time for the browser.
  public function extension() {
    echo file::extension(DOCROOT.'files/articles.doc');
  }

  public function mime() {
    $file = 'articles.doc';
    echo $file.'('.file::mime($file).')';
  }

  public function split() {
    $file = 'articles.doc';
    echo (file_exists($file)) ? file::split($file,false,2): 'cannot find file...';
  }
}
