<?=html::stylesheet("style/fancybox.css")?>

<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/jquery.fancybox-1.3.1.js" ></script>
<script type="text/javascript">
            Cufon.replace('h1') ('h2') ('h3') ('h4') ('h5') ('.pagenavi a', {hover:true});
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $("a.zoom").fancybox({
        'padding'		: 0,
        'transitionIn'		: 'elastic',
        'transitionOut'		: 'elastic',
        'titlePosition' 	: 'over',
        'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
                return '<span id="fancybox-title-over">' + (title.length ? ' &nbsp; ' + title : '') + '</span>';
        }
    });
  });
</script>

<p style="color:#33FF33; margin-bottom:30px; text-indent: 30px;">
  <strong><?=$this->session->get_once("message")?></strong>
</p>

<h1 style="margin-left: 30px;">Image Management</h1>
<hr style="margin-bottom:30px; margin-left:30px; margin-right:30px;"/>

<h3 class="header3"><u>Images</u></h3>

<div style="margin-left:20px;">
  <?foreach($photo as $images):?>
    <?if ($images->user_id != $this->session->get("author")) continue?>
    <? $images->status != "active" ? $class="inactive_image" : $class="gallery"?>
    <?=form::hidden("image_id",$images->id)?>
    <?=html::anchor("{$this->uri->segment(1)}/manage_photos/view/{$images->id}",
      html::image("images/thumbnails/thumb_{$images->image_src}",
        array(
          'alt'=>'No Image',
          'class'=>$class
        )
      ),
      array(
       'class'=>'zoom',
       'rel'=>'group',
       'title'=>$images->image_src
      )
    )?>
  <?endforeach?>
  <?=form::hidden("user_id",$this->session->get("author"))?>
</div>

<p style="text-align:center;">
  <?=html::anchor("{$this->uri->segment(1)}/{$this->uri->segment(2)}/deactivate_all", "Deactivate all my images")?>
  <span>&nbsp|&nbsp</span>
  <?=html::anchor("{$this->uri->segment(1)}/{$this->uri->segment(2)}/activate_all", "Activate all my images")?>
</p>

<h3><u>Upload Images</u></h3>

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




