<?php defined('SYSPATH') OR die('No direct access allowed.');
class Download_Controller extends Controller {

/**
 * Downloading of file practices using controllers so no need for templates.
 */

  public function download() {
    $this->auto_render = true;
    download::force(DOCROOT.'downloads/file.txt');
  }
}
