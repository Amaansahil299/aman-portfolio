<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Common\Controller;

class CategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        return view('categories.category-homepage', ["id" => $id]);
    }

}
