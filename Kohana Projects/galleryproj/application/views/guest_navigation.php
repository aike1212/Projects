 <div class="art-nav">
    <div class="l"></div>
    <div class="r"></div>
    <ul class="art-menu">
        <li><a href="<?=url::base()?>guest_home" <?=$this->uri->segment(2) == "guest_home" ? "class=\"../active\"" : null?>><span class="l"></span><span class="r"></span><span class="t">Home</span></a></li>
        <li><a href="<?=url::base()?>guest_gallery" <?=$this->uri->segment(2) == "guest_gallery" ? "class=\"../active\"" : null?>><span class="l"></span><span class="r"></span><span class="t">Gallery</span></a></li>

        <li><a href="<?=url::base()?>guest_about" <?=$this->uri->segment(2) == "guest_about" ? "class=\"../active\"" : null?>><span class="l"></span><span class="r"></span><span class="t">About Me</span></a></li>
    </ul>
</div>