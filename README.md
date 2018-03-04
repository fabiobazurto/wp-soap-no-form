# wp-soap-no-form
WP simple Plugin SOAP request track package info.

This plugin requests tracking package info to SOAP private delivery business.

First you need to  know What is SOAP? Wikipedia is good for now 

<https://en.wikipedia.org/wiki/SOAP>

## URL ##	
Replace YOUR-WSDL-HERE with your wsdl url

`$wsdl = 'YOUR-WSDL-HERE';`

## Params ##
You  need to configure your params inside soap-no-form.php. Add params as much you need

	$params['trackNumber'] = $_POST["cf-soap-number"];
	$params['trackNumber2'] = $_POST["cf-soap-number2"];`  

 
## Execution ## 
Executes request to specific SOAP operation

`$response = $client->YOUR-SOAP-OPERATION($params);`

## Time to play ##
If you need to get response StdClass, PHP requires you replace YOUR-SOAP-OPERATION and adds Result word at the end.
		