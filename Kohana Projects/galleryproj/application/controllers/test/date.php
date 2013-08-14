<?php defined('SYSPATH') OR die('No direct access allowed.');
class Date_Controller extends Controller {

/**
 * Date manipulation practices using controllers so no need for templates.
 */

  // Converts date from UNIX to DOS format.
  public function unix_to_dos() {
    $time = mktime(11,30,00,04,21,2010);
    echo $time;
    echo ('<br/>');
    $time = date::unix2dos($time);
    print $time;
  }

  // Converts date from DOS to UNIX format.
  public function dos_to_unix() {
    $time = 404031313;
    echo $time;
    echo ('<br/>');
    $time = date::dos2unix($time);
    print $time;
  }

  // Calculates seconds between the time zones.
  public function offset() {
    print (date::offset('CST').'<br />');
    print (date::offset('CST', 'MST').'<br />');
    print (date::offset('UTC', 'GMT').'<br />');
  }

  // Creates a number of seconds based on the input. Minutes/minutes() can be applied here.
  public function seconds() {
    print Kohana::debug(date::seconds());
    print Kohana::debug(date::seconds(5,0,51));
  }

  // Displays no. of hours in an array fashion.
  public function hours() {
    echo Kohana::debug(date::hours());
    echo Kohana::debug(date::hours(1,false,9));
    echo Kohana::debug(date::hours(1,true,20));
    echo Kohana::debug(date::hours(1,true,date('g')));
  }

  // Displays AM or PM based on the given input.
  public function ampm($hour) {
    print Kohana::debug(date::ampm($hour));
  }

  // Lists all days for the given month and year.
  public function days() {
    print Kohana::debug(date::days(2,2008));
  }

  // Returns months in a year in an array like fashion.
  public function months() {
    print Kohana::debug(date::months());
  }

  // Returns the years between 1st and 2nd value.
  public function years() {
    print Kohana::debug(date::years());
    print Kohana::debug(date::years(1986,2050));
  }

  // Returns time between 2 timestamps.
  public function timespan() {
    $timestamp = time() - (55*30*21*5*12*2);
    $timestamp2 = time() - (32*3*2*7*31*1*3*200);
    echo Kohana::debug(date::timespan($timestamp));
    print Kohana::debug(date::timespan($timestamp,time(),'months,days,minutes,seconds'));
    print Kohana::debug(date::timespan($timestamp,$timestamp2));
  }

  // Converts given hour to AM/PM format.
  public function adjust() {
      print Kohana::debug(date::adjust(7,'PM'));
  }
}
