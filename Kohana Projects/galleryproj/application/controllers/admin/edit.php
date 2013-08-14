<?php defined('SYSPATH') OR die('No direct access allowed.');
class Edit_Controller extends Admin_Pages_Controller {
	var $template = "admin/main_page";

          public function edit_photos($image_id) {
            $get_image = Doctrine::getTable("Tblimages")->find($image_id);
            $this->template->content = new View("admin/edit");
            $this->template->content->img = $get_image;
          }
          
          public function activate_photo($image_id){
            $img = Doctrine::getTable("Tblimages")->find($image_id);

            if($img == null) {
              $this->session->set("message", "There are no available images.");
              url::redirect($this->input->server("HTTP_REFERER"));
            }

            $img->status = "active";
            $img->save();

            $this->session->set("message", "The image has been activated.");
            url::redirect($this->input->server("HTTP_REFERER"));
         }

         public function deactivate_photo($image_id){
            $img = Doctrine::getTable("Tblimages")->find($image_id);

            if($img == null) {
              $this->session->set("message", "There are no available images.");
              url::redirect($this->input->server("HTTP_REFERER"));
            }

            $img->status = "inactive";
            $img->save();

            $this->session->set("message", "The image has been deactivated.");
            url::redirect($this->input->server("HTTP_REFERER"));
         }

          public function edit_users($user_id) {
            $get_user = Doctrine::getTable("Tblusers")->find($user_id);
            $this->template->content = new View("admin/editting");
            $this->template->content->usr = $get_user;
          }

          public function activate_account($user_id){
            $usr = Doctrine::getTable("Tblusers")->find($user_id);
             
            if($usr == null) {
              $this->session->set("message", "There are no available users.");
              url::redirect($this->input->server("HTTP_REFERER"));
            }

            $usr->status = "active";
            $usr->save();

            $this->session->set("message", "The user has been activated.");
            url::redirect($this->input->server("HTTP_REFERER"));
         }

         public function deactivate_account($user_id){
            $usr = Doctrine::getTable("Tblusers")->find($user_id);

            if($usr == null) {
              $this->session->set("message", "There are no available users.");
              url::redirect($this->input->server("HTTP_REFERER"));
            }

            $usr->status = "inactive";
            $usr->save();

            $this->session->set("message", "The user has been deactivated.");
            url::redirect($this->input->server("HTTP_REFERER"));
         }
}





