<?=html::stylesheet("style/style.css")?>

<h3 class="header3"><u>Image Display</u></h3>

<span style="margin-left:200px; margin-bottom: 40px;">
  <?=html::anchor("images/{$image->image_src}", html::image(array('src'=>"images/{$image->image_src}",
    'width'=>'200', 'height'=>'200'), array('alt'=>'No Image..', 'class'=>'gallery')))?>
</span>

<?=form::open()?>
  <fieldset style="width:620px;">
    <div>
      <ul>
        <li class="reg">
          <strong><?=form::label("img_id","ID Number: ","class=\"cLabel\"")?></strong>
          <?=form::label("image_id","{$image->id}","class=\"cContent\"")?>
        </li>
        <li class="reg">
          <strong><?=form::label("img_name","Image Name: ","class=\"cLabel\"")?></strong>
          <?=text::limit_chars(form::label("image_name","{$image->image_src}","class=\"cContent\""),90,"...")?>
        </li>
        <li class="reg">
          <strong><?=form::label("img_date","Date Created: ","class=\"cLabel\"")?></strong>
          <?=form::label("image_date","{$image->date_created}","class=\"cContent\"")?>
        </li>
        <li class="reg">
          <strong><?=form::label("stat","Status: ","class=\"cLabel\"")?></strong>
          <? $selection = array('active'=>'Active', 'inactive'=>'Inactive');?>
          <?=form::dropdown('input_dropdown',$selection,'standard');?>
        </li>
        <li class="reg">
          <?=form::checkbox('check_profile', 'is_profile_pic');?>
          <strong><?=form::label('checking_profile', ' Make this your profile picture.');?></strong>
        </li>
        <li class="reg">
          <?=form::hidden("img_id", $image->id)?>
        </li>
      </ul>
    </div>
  </fieldset>

<p style="margin-top: 10px; margin-left: 300px; margin-bottom: 50px;"><?=form::submit("save","Save")?></p>
<span style="margin-left: 500px; margin-right: 30px;"><?=html::anchor("admin/upload_photos","Back to image library");?></span>

<fieldset style="margin-top: 50px;">
  <p>Notice:<em>"Inactive" images will not display in the gallery.</em></p>
</fieldset>

