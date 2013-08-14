<h1 style="margin-left:30px; margin-bottom: 30px;">Edit Photos</h1>

<h5 style="margin-left:50px; margin-bottom: 20px;"><?=html::anchor("admin/manage_photos", "back")?></h5>

<link rel="stylesheet" href="../../../style/style.css" type="text/css" media="screen" />

<?=form::open()?>
    <div>
        <ul>
            <li>
                <a href="../../../images/<?=$img->image_src?>"><img style="margin-left:30px; margin-bottom: 20px;" class="gallery" src="../../../images/<?=$img->image_src?>" alt="No Image.."/></a>
            </li>
            <li>
                <?=form::label("stats", "Status: ")?>
                <?$option = array('active'=>'Active', 'inactive'=>'Inactive')?>
                <?=form::dropdown("status", $option, "active")?>
            </li>
            <li>
                <?=form::hidden("image_id",$img->id)?>
                <?=form::submit("ok", "OK")?><br/>
            </li>
        </ul>
    </div>


<?=form::close()?>