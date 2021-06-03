<?php
/**
 * Plugin Name: Get Exchange Rates
 * Description: This plugin gets exchange rates from https://exchangeratesapi.io/
 * Version: 1.0.0
 * Author: Umair Ashraf
 * License: proprietary
 */

if( ! class_exists( 'Get_Exchange_Rates' ) ) {
    /**
     * Class acts as a natural name-space
     */
    class Get_Exchange_Rates {

        public function __construct() {
            add_action( 'init', array( $this, 'add_shortcode_to_get_exchange_rates' ) );
        }

        function add_shortcode_to_get_exchange_rates() {
            add_shortcode('show-exchange-rates-api', array( $this, 'get_exchange_rates_from_api' ));
        }

        function get_exchange_rates_from_api() {
            // set API Endpoint and API key
            $endpoint = 'latest';
            $access_key = '3b60a686a89625acde4c5bff6eddecc6';

            // Initialize CURL:
            $ch = curl_init('http://api.exchangeratesapi.io/v1/'.$endpoint.'?access_key='.$access_key.'');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            // Store the data:
            $json = curl_exec($ch);
            curl_close($ch);

            // Decode JSON response:
            $exchangeRates = json_decode($json, true);

            $content = "<h3 class='text-center mt-5'>Exchange Rates</h3><p class='text-center'>";

            if( $exchangeRates['success'] ) {

                foreach ($exchangeRates['rates'] as $key => $value) {
                    $content .= "[".$key."]: ".$value."<br>";
                }

                $content .= "</p>";

            }

            return $content;
        }
    }
    
    new \Get_Exchange_Rates();
}