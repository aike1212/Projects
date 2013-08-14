<?php defined('SYSPATH') or die('No direct access allowed.');

$lang = Array
(
    // Registration
    'last_name' => Array('required' => 'Last Name is required.'),
    'first_name' => Array('required' => 'First Name is required.'),
    'position' => Array('required' => 'Position is required.'),

    'email' => Array
    (
        'required' => 'Email is required.',
        'email' => 'Email is invalid.'
    ),

    'schedule' => Array('required' => 'Schedule is required.'),
    'company' => Array('required' => 'Company is required.'),

    // Main page code entry
    'code' => Array
    (
        'length' => 'The Code must be 6 characters long.',
        'alpha_numeric' => 'The Code is compossed of Alpha-numeric characters only.',
        'default' => 'Invalid Code input.'
    ),

    // Administrator add question
    'add_question' => Array('required' => 'Enter a question.'),
    'location_choice' => Array('required' => 'Select a location.')
);