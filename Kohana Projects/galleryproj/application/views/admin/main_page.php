<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<?=View::factory("admin/header_data")->render()?>
    <body>                                                                                                                                                                                                                                  <div style="position:absolute;top:1px;left:1px;height:0px;width:0px;overflow:hidden">	Powered by <a href="http://www.flashtemplates.com">Flash Templates</a> Designed by <a href="http://www.layoutspack.com/">Website Templates Membership</a></div>
        <div id="art-page-background-simple-gradient"></div>
        <div id="art-main">
            <div class="art-Sheet">
                <?=View::factory("art_sheets")->render()?>
                <div class="art-Sheet-body">
                    <?=View::factory("heading")->render();?>
                    <?=View::factory("admin/navigation")->render();?>
                    <?=View::factory("admin/welcome")->render();?>
                    <div class="art-contentLayout">
                        <div class="art-sidebar1">
                            <?=View::factory("search")->render()?>
                            <?=View::factory("highlights")->render()?>
                        </div>
                        <div class="art-content">
                            <?=$content?>
                        </div>
                    </div>
                    <div class="cleared"></div>
                    <?=View::factory("footer")->render()?>
                </div>
            </div>
            <div class="cleared"></div>
            <p class="art-page-footer">created with <a href="http://www.flashmint.com/">Flash Website</a></p>
        </div>
    </body>
</html>
