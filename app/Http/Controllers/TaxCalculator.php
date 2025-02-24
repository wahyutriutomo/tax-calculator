<?php

namespace App\Http\Controllers;

use App\Models\TaxCategory;
use App\Services\PPh21Calculator;
use Illuminate\Http\Request;

class TaxCalculator extends Controller
{
    public function index()
    {
        $pph21Service = new PPh21Calculator();
        $categories = TaxCategory::with(['taxObjects', 'childs'])->orderBy('id')->get();
        $ptkpRates = $pph21Service->getPTKPRates();
        // dd($ptkpRates);
        return view("home", compact("categories", "ptkpRates"));
    }

    public function calculatePPh21_ter(Request $request)
    {
        return response()->json([]);
    }
}
