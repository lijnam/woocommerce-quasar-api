<?php

namespace App\Http\Controllers;

use App\Interfaces\RestInterface;
use App\Services\WooCommerce\WooCommerce;
use Illuminate\Http\Request;

class ProductsController extends Controller implements RestInterface
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

    public function get(Request $request){
        return $this->woocommerce->get('products',$request->input());
    }

    public function post(Request $request){

    }

    public function put(Request $request){

    }



    //
}
