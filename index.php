<?php
	//! @file index.php
	//! @author Caro Noyer
	//! @date 2012-09-09

	// Init date to timezone for France
	ini_set('date.timezone',"Europe/Paris");

	// Report all errors directly to the screen for simple diagnostics
	// in the dev environment
	error_reporting(E_ALL | E_STRICT);  
	ini_set('display_startup_errors', 0);  
	ini_set('display_errors', 0);

	set_include_path(
		'libraries' . PATH_SEPARATOR .
		'includes' . PATH_SEPARATOR .
		'config' . PATH_SEPARATOR .
		get_include_path());

	// Create Page object
	require_once 'page.class.php';
	$page = new Page();

	// reCAPTCHA ?
	/*if ($page->getRequestPage() !== null
		&& $page->getRequestPage == 'contact')
	{
		// Generate contact form
		$page->setReCaptcha();
	}*/

	$page->mSmarty->display('interface.tpl');
?>
