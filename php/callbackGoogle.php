<?php

include_once 'vendor/autoload.php';

//  Authorization code: 4/8xGKzCxZqapCip02TG5bsqC4xCfLbcM_pfI8g3vR8Fs

$provider = new League\OAuth2\Client\Provider\Google(array(
    'clientId'  =>  '1036825226740.apps.googleusercontent.com',
    'clientSecret'  =>  'tlNwN-uPrroReUK7ry52Zxnh',
    'redirectUri'   =>  'https://www.myempresa.eu/php/callbackGoogle.php',
    'hostedDomain' => 'myempresa.eu',
));



if ( ! isset($_GET['code'])) {

	// If we don't have an authorization code then get one
    $provider->authorize();
    
} else {

    try {

    	// Try to get an access token (using the authorization code grant)
        $t = $provider->getAccessToken('authorization_code', [
                    'code' => $_GET['code']
                    ]);

        try {

        	// We got an access token, let's now get the user's details
            //$userDetails = $provider->getUserDetails($t);
            //
            // Try to get an access token (using the authorization code grant)
            $user = $provider->getResourceOwner($t);
            
            $email = $user->getEmail();
            $name = $user->getName();
            $locale = $user->getLocale();
            $link = $user->getLink();
            $gender = $user->getGender();

            
            /*
             * String xPais = request.getParameter("locale");
        String xMail = request.getParameter("email");
        String xNombre = request.getParameter("name");
        String xGenero = request.getParameter("gender");
        String xPlus = request.getParameter("link");
             */
            
           //echo $params='name='. $userDetails['name'] .'&email='. $userDetails['email'].'&locale=es&gender= &link= ';
         
            //header('Location: ServletAltaIdentidadFederada.servlet?'.$params);
            
            //print_r($userDetails);
            /*$data = array();
            foreach ($userDetails as $attribute => $value) {
                $data[$attribute]=$value;
                //var_dump($attribute, $value) . PHP_EOL . PHP_EOL;
            }
            */
            $params='name='.$name.'&email='.$email.'&locale='.$locale.'&gender=' .$gender. '&link= '.$link;
            //var_dump($params);
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