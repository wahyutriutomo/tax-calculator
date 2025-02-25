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

        return view("home", compact("categories", "ptkpRates"));
    }

    public function calculatePPh21_ter(Request $request)
    {
        $pph21Service = new PPh21Calculator();
        $dpp = $request->ak_bruto + $request->ph_bruto;

        if ($request->schema == 'gross') {
            $result = $pph21Service->calculatePph21TER($dpp, $request->ptkp);
        } elseif ($request->schema == 'grossup') {
            $result = $pph21Service->calculateTERGroosUp($dpp, $request->ptkp);
        }

        return response()->json([
            'dpp' => $result['dpp'],
            'rate' => $result['rate'],
            'pph' => $result['pph'],
            'category_ter' => $result['category_ter']
        ]);
    }
}
