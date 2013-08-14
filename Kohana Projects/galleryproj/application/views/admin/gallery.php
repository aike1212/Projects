<?=html::stylesheet("../style/fancybox.css")?>

<script type="text/javascript" src="../js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="../js/jquery.fancybox-1.3.1.js"></script>

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

<h1 style="margin-left: 30px">Gallery</h1>
<hr style="margin-bottom:30px; margin-left:30px; margin-right:30px;"/>

<div style="text-align:center;"><?=$this->pagination?></div>

<div style="margin-left:20px;">
    <?foreach($photo as $images):?>
        <?=html::anchor("images/{$images->image_src}",
           html::image("images/thumbnails/thumb_{$images->image_src}",
             array(
               'alt'=>'No Image',
               'class'=>'gallery'
             )
           ),
          array(
           'class'=>'zoom',
           'rel'=>'group',
           'title'=>$images->image_src
          )
        )?>
      <?endforeach?>
</div>

<div style="text-align:center;"><?=$this->pagination?></div>
