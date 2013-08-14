<?php
/**
 *** Custom Functions ***
 *** by Aike Chan ***
 */
 
class CustomFunctions {

	function check_if_following($following_str, $author_id) {
		$follow_check = explode(', ',$following_str);
		
		foreach($follow_check as $fcheck) {
			if($fcheck === $author_id) {
				return 'TRUE';
			} 
		}
	}
	
	
	function unset_followers($follow_str, $author_id) {
		$follow_str = explode(', ', $follow_str);	
	
		foreach($follow_str as $index=>&$auth_id){
			if($auth_id == $author_id) {
				unset($follow_str[$index]);
			}
		}
		
		$follow_str = implode(', ',$follow_str);
		return $follow_str;
	}
	
	function add_followers($follow_str, $id) {
		if ($follow_str != null) {
			$follow = $follow_str;
			$follow = $follow . ", " . $id;
		} else {
			$follow = $id;
		}
		
		return $follow;
	}
	
	function category_image($slug) {
		switch($slug) {
			case '01':
				$cat = 'family';
				break;
			case '02':
				$cat = 'kids';
				break;
			case '03':
				$cat = 'newborn';
				break;
			case '04':
				$cat = 'pets';
				break;
			case '05':
				$cat = 'work';
				break;
			case '06':
				$cat = 'friends';
				break;
			case '07':
				$cat = 'nature';
				break;
			case '08':
				$cat = 'sports';
				break;
			case '09':
				$cat = 'finances';
				break;
			case '10':
				$cat = 'god';
				break;
			case '11':
				$cat = 'health';
				break;
			case '12':
				$cat = 'marriage';
				break;
			case '13':
				$cat = 'school';
				break;
			case '14':
				$cat = 'relationship';
				break;
			case '15':
				$cat = 'raok';
				break;
		}
		if($slug != null)
			echo "<img src='http://writegodathankyou.net/writegodathanku/wp-content/themes/writegodathanku/images/content/bg_cat-thumb-".$cat.".png' alt='Category:".$cat."' width='95' height='84' />";
	}
	
	function slug_define($slug) {
		switch($slug) {
			case '01':
				$cat = 'Family';
				break;
			case '02':
				$cat = 'Kids';
				break;
			case '03':
				$cat = 'Newborn';
				break;
			case '04':
				$cat = 'Pets';
				break;
			case '05':
				$cat = 'Work';
				break;
			case '06':
				$cat = 'Friendship';
				break;
			case '07':
				$cat = 'Nature';
				break;
			case '08':
				$cat = 'Sports';
				break;
			case '09':
				$cat = 'Finances';
				break;
			case '10':
				$cat = 'God';
				break;
			case '11':
				$cat = 'Health';
				break;
			case '12':
				$cat = 'Marriage';
				break;
			case '13':
				$cat = 'School';
				break;
			case '14':
				$cat = 'Relationship';
				break;
			case '15':
				$cat = 'Random Acts of Kindness';
				break;
			case null:
				$cat = 'ALL';
				break;
		}
		
		return $cat;
	}
	
	function detect_love_button_type($type) {
		if($type == 2) {
			echo '_';
		} else if($type == 3) {
			echo '__';
		}
	}
	
	function get_month($month_num) {
		switch($month_num) {
			case '1':
				$month = 'January';
				break;
			case '2':
				$month = 'February';
				break;
			case '3':
				$month = 'March';
				break;
			case '4':
				$month = 'April';
				break;
			case '5':
				$month = 'May';
				break;
			case '6':
				$month = 'June';
				break;
			case '7':
				$month = 'July';
				break;
			case '8':
				$month = 'August';
				break;
			case '9':
				$month = 'September';
				break;
			case '10':
				$month = 'October';
				break;
			case '11':
				$month = 'November';
				break;
			case '12':
				$month = 'December';
				break;
		}
		
		return $month;
	}
	
	function randomPassword() {
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
	}
}