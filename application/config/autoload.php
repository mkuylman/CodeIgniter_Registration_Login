<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$autoload['packages'] = array();

// make sure you load the database and session libraries automatically
$autoload['libraries'] = array('database', 'session');

// autoload the URL helper as well
// URL will be helpful later when we deal with redirects 
$autoload['helper'] = array('url');

$autoload['config'] = array();

$autoload['language'] = array();

$autoload['model'] = array();

//end of autoload.php