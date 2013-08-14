<div class="art-nav">
  <div class="l"></div>
  <div class="r"></div>
  <ul class="art-menu">
    <li><a href="<?=url::base()?>admin/home" <?=$this->uri->segment(2) == "home" ? "class=\"active\"" : null?>><span class="l"></span><span class="r"></span><span class="t">Home</span></a></li>
    <li><a href="<?=url::base()?>admin/blogs" <?=$this->uri->segment(2) == "blogs" ? "class=\"active\"" : null?>><span class="l"></span><span class="r"></span><span class="t">Blogs</span></a></li>
    <li><a href="<?=url::base()?>admin/gallery" <?=$this->uri->segment(2) == "gallery" ? "class=\"active\"" : null?>><span class="l"></span><span class="r"></span><span class="t">Gallery</span></a></li>
    <li><a href="<?=url::base()?>admin/upload_photos" <?=$this->uri->segment(2) == "upload_photos" ? "class=\"active\"" : null?>><span class="l"></span><span class="r"></span><span class="t">My Images</span></a></li>
    <li><a href="<?=url::base()?>admin/manage_users" <?=$this->uri->segment(2) == "manage_users" ? "class=\"active\"" : null?>><span class="l"></span><span class="r"></span><span class="t">Manage Users</span></a></li>
    <li><a href="<?=url::base()?>admin/manage_photos" <?=$this->uri->segment(2) == "manage_photos" ? "class=\"active\"" : null?>><span class="l"></span><span class="r"></span><span class="t">Manage Photos</span></a></li>
    <li><a href="<?=url::base()?>admin/profile" <?=$this->uri->segment(2) == "profile" ? "class=\"active\"" : null?>><span class="l"></span><span class="r"></span><span class="t">Profile</span></a></li>
    <li><a href="<?=url::base()?>admin/about" <?=$this->uri->segment(2) == "about" ? "class=\"active\"" : null?>><span class="l"></span><span class="r"></span><span class="t">About Me</span></a></li>
  </ul>
</div>