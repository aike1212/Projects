<p style="color:#FF3333; margin-bottom:30px; text-indent: 30px;">
    <strong><?=$this->session->get_once("messageGreen")?></strong>
    <strong><?=$this->session->get_once("messageRed")?></strong>
</p>

<h1 style="margin-left: 30px;">List of Images</h1>

<div style="text-align:center;"><?=$this->pagination?></div>

  <table class="accounts" style="margin-left:40px;">
    <tr>
      <th class="th">Image Name</th>
      <th class="th">Uploader</th>
      <th class="th">Date Uploaded</th>
      <th class="th">Status</th>
    </tr>

    <?foreach($image as $images):?>
      
      <?if ($tbl_ctr % 2 == 0):?>
        <tr style="background-color:rgb(40,40,40);">
      <?else:?>
        <tr>
      <?endif?>

        <td class="td">
          <?=html::anchor("images/{$images->image_src}",
            text::limit_chars($images->image_src, 40, "..." ),
            array(
              'class'=>'zoom',
              'title'=>$images->image_src
            )
          )?>
        </td>
        
        <td class="td"><?=html::anchor("admin/profile/view_uploader/{$images->user_id}",
          "{$images->Tblusers->first_name} {$images->Tblusers->last_name}", 'class="link_style"')?>
        </td>

        <?form::hidden("uploader_id", $images->user_id)?>

        <td class="td">
          <?$date = explode(" ",$images->date_created)?>
          <?=form::label("date", $date[0])?>
        </td>

        <td class="td">
          <?if($images->status == "active"):?>
            <span class="status_active"><?=$images->status?></span>
          <?else:?>
            <span class="status_inactive"><?=$images->status?></span>
          <?endif?>
        </td>

        <td class="td">
          <?if($images->status == "active"):?>
            <span title="deactivate"><?=html::anchor("admin/edit/deactivate_photo/{$images->id}",
                    html::image("images/icons/Cancel.png","deactivate"))?></span>
          <?else:?>
            <span title="activate"><?=html::anchor("admin/edit/activate_photo/{$images->id}", 
                    html::image("images/icons/OK.png","activate"))?></span>
          <?endif?>
        </td>
      </tr>
      <?$tbl_ctr++;?>
    <?endforeach?>
  </table>

<div style="text-align:center;"><?=$this->pagination?></div>

