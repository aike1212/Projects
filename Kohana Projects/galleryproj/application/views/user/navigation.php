 <div class="art-nav">
    <div class="l"></div>
    <div class="r"></div>
    <ul class="art-menu">
        <li><a href="<?=url::base()?>user/home" <?=$this->uri->segment(2) == "home" ? "class=\"active\"" : null?>><span class="l"></span><span class="r"></span><span class="t">Home</span></a></li>
        <li><a href="<?=url::base()?>user/blogs" <?=$this->uri->segment(2) == "blogs" ? "class=\"active\"" : null?>><span class="l"></span><span class="r"></span><span class="t">Blogs</span></a></li>
        <li><a href="<?=url::base()?>user/gallery" <?=$this->uri->segment(2) == "gallery" ? "class=\"active\"" : null?>><span class="l"></span><span class="r"></span><span class="t">Gallery</span></a></li>
        <li><a href="<?=url::base()?>user/manage_photos" <?=$this->uri->segment(2) == "manage_photos" ? "class=\"active\"" : null?>><span class="l"></span><span class="r"></span><span class="t">My Images</span></a></li>
        <li><a href="<?=url::base()?>user/profile" <?=$this->uri->segment(2) == "profile" ? "class=\"active\"" : null?>><span class="l"></span><span class="r"></span><span class="t">Profile</span></a></li>
        <li><a href="<?=url::base()?>user/about" <?=$this->uri->segment(2) == "about" ? "class=\"active\"" : null?>><span class="l"></span><span class="r"></span><span class="t">About Me</span></a></li>

    </ul>
</div>