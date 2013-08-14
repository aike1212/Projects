<?=html::stylesheet("style/shadowbox.css")?>

<link rel="stylesheet" type="text/css" href="style/shadowbox.css">
<script type="text/javascript" src="js/shadowbox.js"></script>
<script type="text/javascript">
  Shadowbox.init();
</script>

<div>
  <span style="float:right; padding-right:50px; padding-top:5px">
    <?=html::anchor("login","Sign In",array('rel'=>'shadowbox;height=230;width=360;','title'=>'Login'))?>
    <span style="padding-left:8px; padding-right:8px">|</span>
    <?=html::anchor('register','Sign Up')?>
  </span>
</div>

<div class="art-Post">
  <div class="art-Post-body">
    <div class="art-Post-inner">
      <?=View::factory("home_title")->render()?>
      <div class="art-PostContent">
          <? foreach ($content as $contents) {?>
            <p style="text-indent: 30px">
              <?=$contents->content?>
            </p>
          <?}?>
        <p class="read_more">
          <span class="art-button-wrapper">
            <span class="l"> </span>
            <span class="r"> </span>
            <a class="art-button" href="javascript:void(0)">Read more</a>
          </span>
        </p>
      </div>
      <div class="cleared"></div>
    </div>
  </div>
</div>
<div class="art-Post">
  <div class="art-Post-body">
    <div class="art-Post-inner">
      <div class="art-PostMetadataHeader">
        <h2 class="art-PostHeaderIcon-wrapper">
          <span class="art-PostHeader">Rules and Regulations</span>
          <hr style="margin-bottom:30px; margin-right:30px;"/>
        </h2>
      </div>
      <div class="art-PostContent">
        <p style="text-indent: 30px">
          <?=$rules[0]->content?>
        </p>
        <blockquote>
          <p class="read_more">
              &#8220;Peace be with you and God bless.&#8221;<br />
          </p>
        </blockquote><br/>
      </div>
      <div class="cleared"></div>
    </div>
  </div>
</div>