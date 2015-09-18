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

/**
 * Self Collection
 */
class SelfCollection implements IService
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

        if (!empty($response)) {
            $return['cost'] = $response;
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

    public function getRequestData(){
        return 1.0;
    }

    public function getSimpleRates(){
        return 0.00000001;
    }
}
