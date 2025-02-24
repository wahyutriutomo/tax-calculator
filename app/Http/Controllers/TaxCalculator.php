<?php

namespace App\Http\Controllers;

use App\Models\TaxCategory;
use Illuminate\Http\Request;

class TaxCalculator extends Controller
{
    public function index()
    {
        $categories = TaxCategory::with(['taxObjects', 'childs'])->orderBy('id')->get();
        // dd($categories);
        return view("home", compact("categories"));
    }
}
