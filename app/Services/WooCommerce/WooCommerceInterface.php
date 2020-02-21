<?php


namespace App\Services\WooCommerce;


interface WooCommerceInterface
{
    public function get(string $endpoint , array $parameters=[] );

    public function post($endpoint, $data);

    public function put($endpoint, $data);
}
