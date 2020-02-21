<?php


namespace App\Interfaces;


use Illuminate\Http\Request;

interface RestInterface
{
    public function get(Request $request ,string $endpoint);

    public function post(Request $request);

    public function put(Request $request);
}
