<?php


namespace App\Services\WooCommerce;

use Automattic\WooCommerce\Client;


abstract class WooCommerceAbstractClass
{
    protected $woocommerce;
     public function __construct()
     {
         $this->woocommerce = new Client(
             env('WC_URL'),
             env('WC_KEY'),
             env('WC_SECRET'),
             [
                 'version' => 'wc/v3',
             ]
         );
     }

}
