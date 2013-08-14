<?php defined('SYSPATH') OR die('No direct access allowed.');
class Html_Controller extends Controller {

/**
 * Form manipulation using controllers so no need for templates.
 */

  public function html() {
    // Anchor
    echo html::anchor('home/news','Go to our news section...').'<br/>';
    echo html::anchor('http://www.google.com','Google..',array('style'=>'font-size: 20px;')).'<br/><br/>';
    // File Anchor
    echo html::file_anchor('images/2wishes.jpg','Link to an Image...').'<br/>';
    echo html::file_anchor('pub/index.html', 'Linux Archive', array('style'=>'font-size: 20px; color: #EF0505;'), 'ftp').'<br/><br/>';
    // Panchor
    echo html::panchor('irc','/downloads','P_anchor link').'<br/><br/>';
    // Array_anchor
    $array = html::anchor_array(array('/guest_home'=>'Guest Home Page', '/guest_about'=>'About Page'));
    echo Kohana::debug($array);
    echo $array.'<br/><br/>';
    // Email
    echo Kohana::debug(html::email('test@mydomain.com'));
    // Mail to
    echo html::mailto('info@example.com');
    // Meta
    echo Kohana::debug(html::meta('generator','Kohana 2.2'));
    echo html::meta(array('generator'=>'Kohana 2.2','robots'=>'noindex,nofollow'));
    // Stylesheet
    echo html::stylesheet(array('style/style.css','style/styleIE6.css','style/styleIE7.css'),
            array('screen','print','print'),false);
    // Link
    echo html::link(array('welcome/home/rss','welcome/home/atom'),'alternate',
            array('application/rss+xml','application/atom+xml'),false);
    // Image
    echo html::image(array('src'=>'images/2wishes.jpg','width'=>'120','height'=>'120'));
    echo html::image(array('src'=>'images/1268901398blind_guardian_wall1024.jpg',
            'width'=>'100','height'=>'100'), array('alt'=>'Image does not exist.'));
    echo html::file_anchor('images/1268730923Teh_Neko_Cosplay.jpg',html::image(array(
            'src'=>'images/1268730923Teh_Neko_Cosplay.jpg','width'=>'100','height'=>'140'),
            array('rel'=>'lightbox')));
    // Attributes
    echo html::attributes(array('style'=>'font-size:20px; border-bottom: 1px solid #000;',
            'rel'=>'lightbox','class'=>'image')).'<br/><br/>';
    echo html::file_anchor('images/1268727722Tennouji.jpg',"Tennouji: Harima's Rival",
            html::attributes(array('style'=>'font-size: 20px; border-bottom: 4px solid #000;',
            'rel'=>'lightbox','class'=>'image')));
    // Breadcrumb
    echo Kohana::debug(html::breadcrumb());
  }
}