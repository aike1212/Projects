<?php
	/*
	 * Template Name: Logout Template
	 */

	session_start();
	session_destroy();
	
	wp_redirect( home_url() );
	exit;
?>