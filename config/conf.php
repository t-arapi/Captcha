<?php

defined('CMS_TA') or die;

return [
	'db' => [
		'driver' 	=> 'mysql',
		'host' 		=> 'localhost',
		'name' 		=> 'bbbbbb',
		'user' 		=> 'root',
		'psw' 		=> 'zaza',
		'charset' 	=> 'utf8',
		'collation' => 'utf8_unicode_ci',
		'prefix' 	=> 'aa_'
	],
	'session' => [
		'save' 		=> 'file',
		'name' 		=> 'qepa',
		'time' 		=> 600,
		'regenerate' 	=> false,
		'encode' 	=> true
	],
	'sito' => [
		'debug' 	=> true,
		'title' 	=> 'Web T-A'
	]
];
