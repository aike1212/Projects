<p style="color:#FF3333; margin-bottom:30px; text-indent: 30px;">
  <strong><?=$this->session->get_once("message")?></strong>
</p>

<h1 style="margin-left:30px">List of Users</h1>

<table class="accounts">
    <tr>
        <th class="th">Username</th>
        <th class="th">Name</th>
        <th class="th">Email Address</th>
        <th class="th">No. of Logins</th>
        <th class="th">Last Login</th>
        <th class="th">Status</th>
    </tr>
    <?foreach($users as $account):?>

      <?if ($tbl_ctr % 2 == 0):?>
        <tr style="background-color:rgb(40,40,40)">
      <?else:?>
        <tr>
      <?endif?>

            <td class="td"><?=html::anchor("admin/profile/view_uploader/{$account->id}",$account->username)?></td>
            <td class="td">
              <?=$account->first_name?>
              <?=$account->last_name?>
            </td>
            <td class="td"><?=text::limit_chars($account->email, 20,"...")?></td>
            <td class="td" style="text-align: right"><?=$account->logins?></td>
            <td class="td"><?=date("m-d-Y",$account->last_login)?></td>

            <td class="td">
                <?if($account->status == "active"):?>
                    <span class="status_active"><?=$account->status?></span>
                <?else:?>
                    <span class="status_inactive"><?=$account->status?></span>
                <?endif?>
            </td>

            <td class ="td">
                <?if($account->status == "active"):?>
                    <span title="deactivate"><?=html::anchor("admin/edit/deactivate_account/{$account->id}",
                            html::image("images/icons/Cancel.png","deactivate"))?></span>
                <?else:?>
                    <span title="activate"><?=html::anchor("admin/edit/activate_account/{$account->id}",
                            html::image("images/icons/OK.png","activate"))?></span>
                <?endif?>
            </td>
        </tr>
        <?$tbl_ctr++;?>
      <?endforeach?>
</table>
