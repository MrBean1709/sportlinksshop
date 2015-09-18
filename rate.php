<?php
	$params = array(
		'ClientInfo'  			=> array(
									// 'AccountCountryCode'	=> 'JO',
									// 'AccountEntity'		 	=> 'AMM',
									// 'AccountNumber'		 	=> '00000',
									// 'AccountPin'		 	=> '000000',
									// 'UserName'			 	=> 'user@company.com',
									// 'Password'			 	=> '000000000',
									// 'Version'			 	=> 'v1.0'
									'AccountCountryCode'   => 'JO',
                                    'AccountEntity'         => 'AMM',
                                    'AccountNumber'         => '20016',
                                    'AccountPin'            => '331421',
                                    'UserName'              => 'testingapi@aramex.com',
                                    'Password'              => 'R123456789$r',
                                    'Version'               => '1.0'
								),

		'Transaction' 			=> array(
									'Reference1'			=> '001'
								),

		'OriginAddress' 	 	=> array(
									'City'					=> 'Amman',
									'CountryCode'				=> 'JO'
								),

		'DestinationAddress' 	=> array(
									'City'					=> 'Dubai',
									'CountryCode'			=> 'AE'
								),
		'ShipmentDetails'		=> array(
									'PaymentType'			 => 'P',
									'ProductGroup'			 => 'EXP',
									'ProductType'			 => 'PPX',
									'ActualWeight' 			 => array('Value' => 5, 'Unit' => 'KG'),
									'ChargeableWeight' 	     => array('Value' => 5, 'Unit' => 'KG'),
									'NumberOfPieces'		 => 5
								)
	);

    require_once("SOAP/Client.php");

	$soapClient = new SoapClient('aramex-rates-calculator-wsdl.wsdl', array('trace' => 1));
	$results = $soapClient->CalculateRate($params);

	echo '<pre>';
	print_r($results);
	die();
?>
