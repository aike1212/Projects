<h1 style="margin-left:30px; margin-bottom: 30px;"> Edit Users</h1>

<h5 style="margin-left:50px; margin-bottom: 20px;"><?=html::anchor("admin/manage_photos", "back")?></h5>

<link rel="stylesheet" href="../../../style/style.css" type="text/css" media="screen" />

<?=form::open()?>
    <div>
        <ul>
            <li>
                <?=form::label("stats", "Status: ")?>
                <?$option = array('active'=>'Active', 'inactive'=>'Inactive')?>
                <?=form::dropdown("status", $option, "active")?>
            </li>
            <li>
                <?=form::hidden("user_id",$usr->id)?>
                <?=form::submit("ok", "OK")?><br/>
            </li>
        </ul>
    </div>


<?=form::close()?>