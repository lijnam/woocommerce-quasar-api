<?php


namespace App\Services\WooCommerce;


class WooCommerce extends WooCommerceAbstractClass implements WooCommerceInterface
{
    public function get(string $endpoint, array $parameters = [])
    {
        try {
            return $this->woocommerce->get($endpoint, $parameters);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Not Found'], 404);
        }
    }

    public function post($endpoint, $data)
    {
        // TODO: Implement post() method.
        try {
        } catch (\Exception $e) {
            return response()->json(['error' => 'Not Found'], 404);
        }
    }

    public function put($endpoint, $data)
    {
        // TODO: Implement put() method.
        try {
        } catch (\Exception $e) {
            return response()->json(['error' => 'Not Found'], 404);
        }

    }

}
