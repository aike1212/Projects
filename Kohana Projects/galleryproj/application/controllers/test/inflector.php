<?php defined('SYSPATH') OR die('No direct access allowed.');
class Inflector_Controller extends Controller {

/**
 * Form manipulation using controllers so no need for templates.
 */
  public function inflect() {
    // Uncountable
    echo inflector::uncountable('money');
    echo inflector::uncountable('book');
    echo inflector::uncountable('rice');
    echo inflector::uncountable('bitch').'<br/><br/>';
    // Singular
    echo inflector::singular('things').'<br/>';
    echo inflector::singular('bitches',1).'<br/><br/>';
    // Plural
    echo inflector::plural('horny person').'<br/>';
    echo inflector::plural('spy').'<br/><br/>';
    // Camelize
    echo inflector::camelize('the quick brown fox jumps over the lazy dog').'<br/>';
    echo inflector::camelize('mr_suave_in_space').'<br/><br/>';
    // Underscore
    echo inflector::underscore('i kill you').'<br/>';
    // Humanize
    echo inflector::humanize('you_will_die_you_bitch!').'<br/>';
    echo inflector::humanize('there-is-no-cow-level.');
  }
}
