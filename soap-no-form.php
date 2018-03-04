<?php
/*
Plugin Name: Soap Form para servientregas
Plugin URI: 
Description: Soap form para servientregas
Version: 1.0
Author: Fabio Bazurto Blacio
Author URI: http://sableypistola.blogspot.com
*/


function html_form_include() {
	include 'includes/_form.php';
}

function result_soap() {

	// if the submit button is clicked, send the email
	if ( isset( $_POST['cf-soap-submitted'] ) ) {
		$trace = true;
		$exceptions = false;
		$wsdl = 'YOUR-WSDL-HERE';
		
		// YOUR PARAMS HERE
		$params['trackNumber'] = $_POST["cf-soap-number"];
		//...
		
		$client = new SoapClient($wsdl, array('trace' => $trace, 'exceptions' => $exceptions));
		
		//Executes request to specific SOAP operation
		//Replace with  your soap operation
		$response = $client->YOUR-SOAP-OPERATION($params);
		
		//We set object with PHP SOAPResult
		//If you need to get response StdClass, PHP requires you
		// replace YOUR-SOAP-OPERATION and adds Result word at the end.
		
		$result = $response->YOUR-SOAP-OPERATIONResult;
		
		//Result
		$tracknum = $_POST["cf-soap-number"];
		
		//Now we can access to StdObj
		
		$senddate = $result->FecEnv;
		$sendcity = $result->CiuRem;
		$delvcity = $result->CiuDes;
		$status = $result->EstAct;
		include 'includes/_result.php';

		
	}
}

function cf_shortcode() {
	ob_start();
	html_form_include();
	result_soap();

	return ob_get_clean();
}

add_shortcode( 'soap_no_form', 'cf_shortcode' );

?>
