<?php
/***************************************************************************
 *                                                                          *
 *   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
 *                                                                          *
 * This  is  commercial  software,  only  users  who have purchased a valid *
 * license  and  accept  to the terms of the  License Agreement can install *
 * and use this program.                                                    *
 *                                                                          *
 ****************************************************************************
 * PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
 * "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
 ****************************************************************************/

namespace Tygh\Shippings\Services;

use Tygh\Shippings\IService;
use Tygh\Http;
use Tygh\Registry;

/**
 * Aramex shipping service
 */
class Aramex implements IService
{

    /**
     * Availability multithreading in this module
     *
     * @var array $_allow_multithreading
     */
    private $_allow_multithreading = false;


    /**
     * Stored shipping information
     *
     * @var array $_shipping_info
     */
    private $_shipping_info = array();


    /**
     * Prepares request data for real-time shipping services.
     *
     * @return array Prepated shipping service information
     */
    public function prepareData($shipping_info){
        $this->_shipping_info = $shipping_info;
    }

    /**
     * Gets information about prices
     *
     * @param  string $response response information from real-time shipping services
     * @return array  Service shipping rate as 'cost' and returned errors as 'error'
     */
    public function processResponse($response){
        $return = array(
            'cost' => false,
            'error' => false,
        );

        if (!empty($response) && empty($response->HasErrors)) {
            $return['cost'] = $response->TotalAmount->Value;
        } else {
            $return['error'] = true;
        }

        return $return;
    }

    /**
    * Gets errors information from response
    *
    * @param string $response response information from real-time shipping services
    * @return string Error message from shipping service
    */
    public function processErrors($response){
        $error = '';

        return $error;
    }

    /**
     * Gets information about availability multithreading in the module
     *
     * @return bool True if service allows multithreading
     */
    public function allowMultithreading(){
        return $this->_allow_multithreading;
    }

    /**
     * Gets data for request
     *
     * @return array Prepared data (method, url, post data, content type)
     */
    public function getRequestData(){
        $info_setting = $this->_shipping_info["service_params"];
        $origination = $this->_shipping_info['package_info']['origination'];
        $location = $this->_shipping_info['package_info']['location'];

        $weight = $this->_shipping_info['package_info']['W'];
        $number_of_pieces = $this->_shipping_info['package_info']['I'];

        if (!empty($_REQUEST['aramex_service_type'])) {
            $_SESSION['aramex_service_type'] = $_REQUEST['aramex_service_type'];
        }
        // ONP: Overnight Parcel - PPX: Priority Parcel Express
        $service_type = $origination['country'] == $location['country'] ? 'ONP' : 'PPX';
        //$service_type = !empty($_SESSION['aramex_service_type']) ? $_SESSION['aramex_service_type'] : $service_type;

        $weight_symbol = strtoupper(Registry::get('settings.General.weight_symbol'));
        $unit_weight = in_array($weight_symbol, array('KG', 'LB')) ? $weight_symbol : 'LB';

        $params = array(
            'ClientInfo' => array(
                'AccountCountryCode' => $info_setting["account_country_code"],
                'AccountEntity'      => $info_setting["account_entity"],
                'AccountNumber'      => $info_setting["account_number"],
                'AccountPin'         => $info_setting["account_pin"],
                'UserName'           => $info_setting["username"],
                'Password'           => $info_setting["password"],
                'Version'            => $info_setting["version"]
            ),
            'Transaction' => array(
                 'Reference1' => ''
            ),
            'OriginAddress' => array(
                'CountryCode' => $origination['country'],
                'PostCode'    => $origination['zipcode']
            ),
            'DestinationAddress' => array(
                'CountryCode' => $location['country'],
                'PostCode'    => $location['zipcode']
            ),
            'ShipmentDetails' => array(
                'PaymentType'            => 'P',
                'ProductGroup'           => $origination['country'] == $location['country'] ? 'DOM' : 'EXP',
                'ProductType'            => $service_type,
                'ActualWeight'           => array('Value' => $weight, 'Unit' => $unit_weight),
                'ChargeableWeight'       => array('Value' => $weight, 'Unit' => $unit_weight),
                'NumberOfPieces'         => $number_of_pieces
            )
        );

        $soapClient =  new \SoapClient(DIR_ROOT . "/" . "aramex-rates-calculator-wsdl.wsdl", array('trace' => 1));
        $results = $soapClient->CalculateRate($params);

        return $results;
    }

    /**
     * Return calculated shipping rates
     *
     * @return array Shipping rates
     */
    public function getSimpleRates(){
        $data = $this->getRequestData();

        return $data;
    }
}
