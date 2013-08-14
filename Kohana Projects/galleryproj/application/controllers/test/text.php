<?php defined('SYSPATH') OR die('No direct access allowed.');
class Text_Controller extends Controller {

/**
 * Rounding numbers using controllers so no need for templates.
 */

  // Limit Words
  public function limit_words() {
    $description = 'The rain in Spain falls mainly in the plain';
    $limit = 5;
    $end = '...';

    $short_description = text::limit_words($description,$limit,$end);
    echo $short_description;
  }
  // Limit Chars
  public function limit_chars() {
    $description = 'The rain in Spain falls mainly in the plain';
    $limit = 15;
    $end = '...';

    $short_description = text::limit_chars($description,$limit,$end);
    echo $short_description;
  }
  // Alternate
  public function alternate() {
    for($i=0;$i<8;$i++) {
      echo text::alternate('1','2','boom');
    }
  }
  // Random
  public function random() {
    echo text::random($type = 'alnum',$length = 10).'<br/>';
    echo text::random($type = 'alpha',$length = 10).'<br/>';
    echo text::random($type = 'numeric',$length = 20).'<br/>';
    echo text::random($type = 'nozero',$length = 20).'<br/>';
    echo text::random($type = 'distinct',$length = 10);
  }
  // Reduce Slashes
  public function reduce_slashes() {
    $str = 'uri//////////uri2//uri3/////uri4';
    echo text::reduce_slashes($str);
  }
  public function censor() {
    $sentence = 'The words obi wan kenobi and paanu ba yan are extremely bad words.
        So paanu ba yan Mr. obi wan kenobi, badwords ka naman daw.';
    $replace = '*';
    $badwords = array('paanu ba yan', 'obi wan kenobi');

    print Kohana::debug($sentence);
    echo text::censor($sentence,$badwords,$replace);
  }
  // Similar
  public function bytes() {
    echo text::bytes('2000000000').'<br/>';
    echo text::bytes('492837987938','GB').'<br/>';
    echo text::bytes('4194304',null,null,false);
  }
  // Widont
  public function widont() {
    $paragraph = 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cras id dolor. Donec ...';
    $paragraph = text::widont($paragraph);
  }
}
?>
