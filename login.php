<?php
	include_once 'Google_client.php';
	include_once 'contrib/Google_Oauth2Service.php';
	
	// Edit Following 3 Lines
	$clientId = '619928167692-rfr8ncpcpsr6orqmme6f5er3pdoc3njk.apps.googleusercontent.com'; //Application client ID
	$clientSecret = '4-FQfovch9rCIFK2gUB_xRFo'; //Application client secret
	$redirectURL = 'http://localhost/social_login'; //Application Callback URL
	
	$gClient = new Google_Client();
	$gClient->setApplicationName('Your Application Name');
	$gClient->setClientId($clientId);
	$gClient->setClientSecret($clientSecret);
	$gClient->setRedirectUri($redirectURL);
	$google_oauthV2 = new Google_Oauth2Service($gClient);
?>
