<?php defined('SYSPATH') OR die('No direct access allowed.');
class Array_Controller extends Controller {

/**
 * Array manipulation practices using controllers so no need for templates.
 */

// var $template = "test/test.php";

  /**
   * Rotates the arrays clockwise.
   *
   * Example: turns 3x2 array to 2x3 array.
   */
  public function rotate() {
    $optical_discs = array('CD'=>array('700',780), 'DVD'=>array('4700','650'), 'BD'=>array('25000','405'));
    print Kohana::debug($optical_discs);
    $optical_discs = arr::rotate($optical_discs,false);
    print('<br/><br/>');
    print Kohana::debug($optical_discs);
  }

  // Removes value(s) of arrays.
  public function remove() {
    $optical_discs = array('CD'=>array('700',780), 'DVD'=>array('4700','650'), 'BD'=>array('25000','405'));
    print Kohana::debug($optical_discs);
    $cd = arr::remove('CD',$optical_discs);
    print('<br/><br/>');
    print Kohana::debug($cd);
    print('<br/><br/>');
    print Kohana::debug($optical_discs);
  }

  // Extracts value(s) of arrays.
  public function extract() {
    $optical_discs = array('CD'=>array('700', 780),'DVD'=>array('4700','650'),'BD'=>array('25000','405'));
    $optical_discs = arr::extract($optical_discs,'DVD','Blue_Ray_Disc');
    print('<br/><br/>');
    print Kohana::debug($optical_discs);
  }

  // Searches value(s) of the arrays and outputs the position in the array where it is stored.
  public function binary_search() {
    $array = array('10','20','30','50','80');
    echo arr::binary_search('20',$array);
  }

  /**
   * Stores in arrays value(s) or multiples of the first given array.
   *
   * Example: arr::range(2,10); stores 2,4,6,8,10 in an array.
   */
  public function range() {
    echo Kohana::debug(arr::range(2, 2000));
  }

  // Merges values of 2 arrays in one single array.
  public function merge() {
    $cup_measurements = array(
      'A'=>'200ml','B'=>'400ml','C'=>array(
        'I'=>'450ml','II'=>'500ml','III'=>array(
          'a'=>'530ml','b'=>array(
            'i'=>'510ml','ii'=>'520ml'
          ),'c'=>'540ml'
        ),'IV'=>'550ml'
      )
    );
    echo Kohana::debug($cup_measurements);
    print('<br/><br/>');
    $additional_cup_measurements = array('D'=>'600ml','E'=>'800ml','F'=>'1L');
    echo Kohana::debug($additional_cup_measurements);
    print('<br/><br/>');
    echo Kohana::debug(arr::merge($cup_measurements, $additional_cup_measurements));
  }

  // Overwrites the first value(s) of the array with the second array.
  public function overwrite() {
    $milliliters = array('lvl1'=>'200ml','lvl2'=>'400ml','lvl3'=>'600ml','lvl4'=>'800ml');
    $ounces = array('lvl1'=>'8oz','lvl2'=>'12oz','lvl3'=>'16oz','lvl4'=>'20oz');
    echo Kohana::debug(arr::overwrite($milliliters,$ounces));
  }

  // Applies returned values of other functions in array values.
  // <editor-fold desc="Multiply function for map recursive">
  public function multiply($value){
    return $value * 1000;
  }
  // </editor-fold>
  public function map_recursive() {
    $array = array('A'=>'1','B'=>'2','C'=>array('x'=>'3','y'=>'4','z'=>'5'),'D'=>'6','E'=>'7');
    echo Kohana::debug($array);
    print('<br/><br/>');
    echo Kohana::debug(arr::map_recursive(array($this,'multiply'),$array));
  }

  // Replaces value(s) of a given array.
  public function unshift_assoc() {
      $flavor = array('Flavor 1'=>'Ube','Flavor 2'=>'Mango','Flavor 3'=>'Vanilla');
      $flavor = arr::unshift_assoc($flavor, 'Flavor 1', 'Strawberry');
      echo Kohana::debug($flavor);
  }

  // Converts arrays into objects.
  public function to_object($yourname) {
      $welcome = array('guest'=>'Hello and welcome');
      print Kohana::debug($welcome,$yourname);
      print('<br/><br/>');
      $welcome = arr::to_object($welcome);
      $name = arr::to_object(array('name'=>$yourname));
      echo $welcome->guest." ".$name->name;
      
  }
}



