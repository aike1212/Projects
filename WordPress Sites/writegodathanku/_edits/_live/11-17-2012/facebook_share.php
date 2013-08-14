<?php
	/*
	 * Template Name: FB API
	 */
global $wpdb;

$post_id = $_GET['post_id'];
	
$query = $wpdb->get_row("
	SELECT *, firstname.meta_value AS first_name, lastname.meta_value AS last_name
	FROM wp_posts
	LEFT JOIN wp_users AS users ON wp_posts.post_author = users.ID
	LEFT JOIN wp_usermeta AS firstname ON users.ID = firstname.user_id
	LEFT JOIN wp_usermeta AS lastname ON firstname.user_id = lastname.user_id
	WHERE wp_posts.ID='$post_id'
	AND firstname.meta_key = 'first_name'
	AND lastname.meta_key = 'last_name'
");

//print_r($query); exit;

require 'src/facebook.php';
$facebook = new Facebook(array(
	'appId'  => '284914291621404',
	'secret' => 'c9c3332ec0a3747b45d43432e7cc7930',
  'cookie' => true
));

$user = $facebook->getUser();

$par = array();
$par['scope'] = "publish_stream";
$par['redirect_uri'] = "http://www.writegodathankyou.com/?success=1";

//echo $facebook->getLogoutUrl();
//echo '<hr />';
//echo $facebook->getLoginUrl($par);

if(!isset($_GET['success'])) header('Location: '.$facebook->getLoginUrl($par));

if ($user) {
	$attachment = array(
		'message' => $query->post_content,
		'name' => $query->first_name . ' ' . $query->last_name,
		'caption' => 'Caption ito ng aking post',
		'link' => 'http://www.writegodathankyou.com',
		'description' => 'Description nya ngay ito',
		'picture' => 'http://www.stonedeft.com/images/far.jpg',
		'actions' => array(
			array(
				'name' => 'Get Search',
				'link' => 'http://www.stonedeft.com/'
			)
		)
	);

	try {
		// Proceed knowing you have a user who is logged in and authenticated
		$result = $facebook->api('/me/feed/','post',$attachment);
	} catch (FacebookApiException $e) {
		error_log($e);
		$user = null;
	}
}
?>


