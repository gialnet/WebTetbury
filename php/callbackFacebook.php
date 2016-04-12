<?php

include_once 'oauth2-client-master/vendor/autoload.php';

$provider = new League\OAuth2\Client\Provider\Facebook(array(
    'clientId'  =>  '264581847213478',
    'clientSecret'  =>  'b658844e920a5158d91e4443d3a631f0',
    'redirectUri'   =>  'https://www.myempresa.eu/php/callbackFacebook.php'
));



if ( ! isset($_GET['code'])) {

	// If we don't have an authorization code then get one
    $provider->authorize();

} else {

    try {

    	// Try to get an access token (using the authorization code grant)
        $t = $provider->getAccessToken('authorization_code', array('code' => $_GET['code']));

        try {

        	// We got an access token, let's now get the user's details
            $userDetails = $provider->getUserDetails($t);

            $data = array();
            foreach ($userDetails as $attribute => $value) {
                $data[$attribute]=$value;
                //var_dump($attribute, $value) . PHP_EOL . PHP_EOL;
            }
            
            $params='name='. $data['name'] .'&email='. $data['email'].'&locale=es&gender= &link= ';
            header('Location: ../ServletAltaIdentidadFederada.servlet?'.$params);

        } catch (Exception $e) {

            // Failed to get user details
            echo 'Failed to get user details';

        }

    } catch (Exception $e) {

        // Failed to get access token
        echo 'Failed to get access token';
    }
}


?>