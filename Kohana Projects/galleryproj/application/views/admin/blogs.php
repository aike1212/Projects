<?=form::open()?>



  <fieldset>

    <p>
      <?=form::label("blogLBL","Comment")?>
      <?=form::textarea("blog","",'rows="10" cols="50"')?>
      <?=form::submit("blogBTN","Blog!")?>
    </p>
    
  </fieldset>

<?=form::close()?>