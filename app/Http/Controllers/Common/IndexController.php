<?php

namespace App\Http\Controllers\Common;

class IndexController extends Controller
{

    /**
     * Display a listing of the resource.
     */


    public function __construct()
    {
    }

    public function index()
    {
        return view('welcome.html');
    }
}
