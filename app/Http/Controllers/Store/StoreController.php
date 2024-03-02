<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Common\Controller;

class StoreController extends Controller
{
    public function index($id)
    {
        return view('stores.stores-homepage', ["id" => $id]);
    }
}
