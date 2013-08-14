<?php defined('SYSPATH') OR die('No direct access allowed.');
class Valid_Controller extends Controller {

/**
 * Rounding numbers using controllers so no need for templates.
 */

  // Email
  public function email() {
    $email = 'steve@ballmer.com';
    echo Kohana::debug($email).'<br/>';
    if(valid::email($email) == true) {
      echo "Valid email";
    } else {
      echo "Invalid email";
    }
  }
  // Email Domain
  public function email_domain() {
    $email = 'steve@ballmer.com';
    echo Kohana::debug($email).'<br/>';
    if(valid::email_domain($email) == true) {
      echo "Valid email domain";
    } else {
      echo "Invalid email domain";
    }
  }
  // Email
  public function url() {
    $url = 'steveballmer.com';
    echo Kohana::debug($url).'<br/>';
    if(valid::url($url) == true) {
      echo "Valid URL";
    } else {
      echo "Invalid URL";
    }
  }
  // IP
  public function ip() {
    $ip = '192.168.0.0';
    echo Kohana::debug($ip).'<br/>';
    if(valid::ip($ip) == true) {
      echo "Valid IP";
    } else {
      echo "Invalid IP";
    }
  }
  // Credit Card
  public function credit_card() {
    $number = "4992739871600";
    echo Kohana::debug($number).'<br/>';
    $types = array('default','paypal','american express');

    if(valid::credit_card($number, $types)) {
      echo "Valid credit card number";
    } else {
      echo "Invalid credit card number";
    }
  }
  // Phone
  public function phone() {
    $phone = '+074 445-2801';
    echo Kohana::debug($phone).'<br/>';
    if(valid::phone($phone) == true) {
      echo "Valid phone number";
    } else {
      echo "Invalid phone number";
    }
  }
  // Alpha
  public function alpha() {
    $str = 'Hello World';
    if(valid::alpha($str) == true) {
      echo "Valid text";
    } else {
      echo "Invalid text";
    }
  }
  // Alpha Numeric
  public function alpha_numeric() {
    $str = 'HelloWorld1234567890';
    echo Kohana::debug($str).'<br/>';
    if(valid::alpha_numeric($str) == true) {
      echo "Valid alpha-numeric text";
    } else {
      echo "Invalid alpha-numeric text";
    }
  }
  // Alpha Dash
  public function alpha_dash() {
    $str = 'Hello_World_-_-__----__--';
    echo Kohana::debug($str).'<br/>';
    if(valid::alpha_dash($str) == true) {
      echo "Valid dashed text";
    } else {
      echo "Invalid dashed text";
    }
  }
  // Digit
  public function digit() {
    $num = '5505050992808974872087 0009';
    echo Kohana::debug($num).'<br/>';
    if(valid::digit($num) == true) {
      echo "Valid digit string";
    } else {
      echo "Invalid digit string";
    }
  }
  // Numeric
  public function numeric() {
    $num = '-99';
    echo Kohana::debug($num).'<br/>';
    if(valid::numeric($num) == true) {
      echo "Valid numeric string";
    } else {
      echo "Invalid numeric string";
    }
  }
  // Standard Text
  public function standard_text() {
    $str = 'The governor is "The Man."';
    echo Kohana::debug($str).'<br/>';
    if(valid::standard_text($str) == true) {
      echo "Valid standard text";
    } else {
      echo "Invalid standard text";
    }
  }
  // Decimal
  public function decimal() {
    $num = 'Php24.50';
    echo Kohana::debug($num).'<br/>';
    if(valid::decimal($num) == true) {
      echo "Valid decimal number";
    } else {
      echo "Invalid decimal number";
    }
  }
}
?>
