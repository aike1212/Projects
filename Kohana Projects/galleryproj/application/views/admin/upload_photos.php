<p style="color:#33FF33; margin-bottom:30px; text-indent: 30px;">
  <strong><?=$this->session->get_once("message")?></strong>
</p>

<h1 style="margin-left: 30px;">Image Management</h1>
<hr style="margin-bottom:30px; margin-left:30px; margin-right:30px;"/>

<h3 class="header3"><u>Images</u></h3>

<div style="margin-left:20px;">
  <?foreach($photo as $images):?>
    <?if ($images->user_id != $this->session->get("author")) continue?>
    <?if ($images->status != "active"):?>
      <?=form::hidden("image_id",$images->id)?>
      <?=html::anchor("{$this->uri->segment(1)}/upload_photos/view/{$images->id}",
        html::image("images/thumbnails/thumb_{$images->image_src}", array('alt'=>'No Image..', 'class'=>'inactive_image')))?>
    <?else:?>
      <?=form::hidden("image_id",$images->id)?>
      <?=html::anchor("{$this->uri->segment(1)}/upload_photos/view/{$images->id}",
        html::image("images/thumbnails/thumb_{$images->image_src}", array('alt'=>'No Image..', 'class'=>'gallery')))?>
    <?endif?>
  <?endforeach?>
</div>

<p style="text-align:center;">
  <?=html::anchor("{$this->uri->segment(1)}/{$this->uri->segment(2)}/deactivate_all", "Deactivate all my images")?>
  <span>&nbsp|&nbsp</span>
  <?=html::anchor("{$this->uri->segment(1)}/{$this->uri->segment(2)}/activate_all", "Activate all my images")?>
</p>

<h3 class="header3"><u>Upload Images</u></h3>

<div style="margin-left:20px; margin-top:20px; margin-bottom:20px;">
  <?=form::open_multipart()?>
    <ul>
      <li>
        <?=form::label("upload", "Upload: ")?>
        <?=form::upload("file", "File")?>
        <?=form::submit("ok", "OK")?>
      </li>
    </ul>
  <?=form::close()?>
</div>


