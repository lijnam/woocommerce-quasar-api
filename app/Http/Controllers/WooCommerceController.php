<?php

namespace App\Http\Controllers;

use App\Interfaces\RestInterface;
use App\Services\WooCommerce\WooCommerce;
use Illuminate\Http\Request;

class WooCommerceController extends Controller /*implements RestInterface*/
{
    private $woocommerce;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->woocommerce= new WooCommerce();
    }

    public function get(Request $request,string $endpoint){
        return $this->woocommerce->get($endpoint,$request->input());
    }

    public function post(Request $request){

    }

    public function put(Request $request){

    }



    //
}
