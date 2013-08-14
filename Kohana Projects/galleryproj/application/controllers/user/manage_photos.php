<?php defined('SYSPATH') OR die('No direct access allowed.');
class Manage_Photos_Controller extends Admin_Pages_Controller {
	var $template = "user/main_page";

	public function index() {
    $this->upload();
    $get_image = Doctrine::getTable("Tblimages")->findAll();

    if ($get_image == null) Event::run("system.404");

    $this->template->content = new View("user/manage_photos");
    $this->template->content->photo = $get_image;
  }

  public function upload() {
    if($this->input->post() == false) return;
    // uses Kohana upload helper
    $_FILES = Validation::factory($_FILES)
      ->add_rules('file', 'upload::valid', 'upload::type[gif,jpg,png]', 'upload::size[5M]');

    if ($_FILES->validate()) {
    $user = Doctrine::getTable("Tblusers")->find($this->session->get("author"));
    if ($user == null) Event::run("system.404");
    // <editor-fold desc="Appreciated">
      // upload full-sized image
      $filename = upload::save('file');
      // Resize, sharpen, and save the images
      Image::factory($filename)
        ->resize(100,100, Image::WIDTH)->crop(100,100)->save(DOCROOT.'images/thumbnails/thumb_'.basename($filename));
      // Remove the temporary file
      //unlink($filename);
      // </editor-fold>
      $this->save($filename);
      // Redirect back to the account page
      $user->images++;
      $user->save();
      $this->session->set("message","Your image has been successfully uploaded.");
      url::redirect($this->input->server("HTTP_REFERER"));
    }
  }

  public function save($filename) {
    $img = new Tblimages();
    $img->image_src = basename($filename);
    $img->user_id = $this->session->get("author");
    $img->save();
  }

  public function view($image_id) {
    $this->update($image_id);
    $get_image = Doctrine::getTable("Tblimages")->find($image_id);

    if ($get_image == null) Event::run("system.404");

    $this->template->content = new View("user/image_options");
    $this->template->content->image = $get_image;
  }

   public function update($img_id) {
    if($this->input->post() == null) return;

    $img = Doctrine::getTable("Tblimages")->find($img_id);
    $img->fromArray($this->input->post());

    if ($img == null) Event::run("system.404");

    if ($this->input->post("radio_profile") == true) {
      $get_user = Doctrine::getTable("Tblusers")->find($this->session->get("author"));
      $get_user->fromArray($this->input->post());

      if($get_user == null) Event::run("system.404");

      $get_user->profile_picture = $img->image_src;
      $get_user->save();
    }

    $img->status = $this->input->post("input_dropdown");
    $img->save();

    $this->session->set("message","All changes have been saved.");
    url::redirect("user/manage_photos");
  }

  public function activate_all() {
    $this->auto_render = false;

    $user = Doctrine::getTable("Tblusers")->find($this->session->get("author"));
    if($user == null) event::run("system.404");
    $images = Doctrine::getTable("Tblimages")->findAll();
    if($images == null) event::run("system.404");

    foreach($images as $image) {
      if ($image->user_id != $user->id) continue;
      $image->status = "active";
      $image->save();
    }

    $this->session->set("message", "All your images have been activated.");
    url::redirect($this->input->server("HTTP_REFERER"));
  }

  public function deactivate_all() {
    $this->auto_render = false;

    $user = Doctrine::getTable("Tblusers")->find($this->session->get("author"));
    if($user == null) event::run("system.404");
    $images = Doctrine::getTable("Tblimages")->findAll();
    if($images == null) event::run("system.404");

    foreach($images as $image) {
      if ($image->user_id != $user->id) continue;
      $image->status = "inactive";
      $image->save();
    }

    $this->session->set("message", "All your images have been deactivated.");
    url::redirect($this->input->server("HTTP_REFERER"));
  }
}

//  <editor-fold desc="Depreciated">
//
//    die(Kohana::debug($_FILES));
//    $result = $this->input->post("file");
//    $result = $_FILES["file"];
//    $files = Validation::factory($_FILES)
//      ->add_rules("file", 'upload::valid', 'upload::required', 'upload::type[gif,jpeg,jpg,png]', 'upload::size[1M]');
//    move_uploaded_file($_FILES["file"]["tmp_name"],"images/" . $_FILES["file"]["name"]);
//
//    if ($files->validate()) {
//      $filename = upload::save("file");
//
//      Image::factory("images/".$_FILES["file"]["name"])
//        ->resize(110, 100, Image::WIDTH)
//        ->save('images/res_'.basename($filename).'.jpg');
//      move_uploaded_file($_FILES["file"]["tmp_name"],"images/" . $_FILES["file"]["name"]);
//      unlink($filename);
//    }else{
//      die("tsk!");
//    }
//
//  </editor-fold>