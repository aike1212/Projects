<?=html::stylesheet("style/style.css")?>

<h2 style="margin-left: 30px;">User <?=$user->first_name."'s "?>Images</h2>
<hr style="margin-bottom:30px; margin-left:30px; margin-right:30px;"/>

<?foreach($image as $images):?>
  <?if ($images->user_id != $user->id) continue?>
  <?if ($images->status != "active"):?>
      <?=form::hidden("image_id",$images->id)?>
      <?=html::image("images/thumbnails/thumb_{$images->image_src}", array('alt'=>'No Image..', 'class'=>'inactive_image'))?>
    <?else:?>
      <?=form::hidden("image_id",$images->id)?>
      <?=html::image("images/thumbnails/thumb_{$images->image_src}", array('alt'=>'No Image..', 'class'=>'gallery'))?>
    <?endif?>
<?endforeach?>

<fieldset class="view_profile">
  <p class="view_photos"><?=html::anchor("admin/profile/view_uploader/{$user->id}","Back to user profile")?></p>
</fieldset>