<?php
	session_start();
	require_once "vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("925715360508-18pf9s6tjg2gjnpogfq56423r5udf4vu.apps.googleusercontent.com");
	$gClient->setClientSecret("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");
	$gClient->setApplicationName("Akatsuki");
	$gClient->setRedirectUri("http://localhost/MDX%20Hackathon/g-callback.php");
	$gClient->addScope(scope_or_scopes:"https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
    
	?>