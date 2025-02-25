<?php

namespace App\Services;

class PPh21Calculator
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    private $ptkpRates = [
        'TK0' => 54000000,
        'TK1' => 58500000,
        'TK2' => 63000000,
        'TK3' => 67500000,
        'K0'  => 58500000,
        'K1'  => 63000000,
        'K2'  => 67500000,
        'K3'  => 72000000,
    ];

    private $taxBrackets = [
        60000000 => 0.05,
        250000000 => 0.15,
        500000000 => 0.25,
        5000000000 => 0.30,
        PHP_INT_MAX => 0.35,
    ];

    // PTKP TK/0, TK/1, K/0
    private $terA = [
        5400000 => 0,
        5650000 => 0.0025,
        5950000 => 0.005,
        6300000 => 0.0075,
        6750000 => 0.01,
        7500000 => 0.0125,
        8550000 => 0.015,
        9650000 => 0.0175,
        10050000 => 0.02,
        10350000 => 0.0225,
        10700000 => 0.025,
        11050000 => 0.03,
        11600000 => 0.035,
        12500000 => 0.04,
        13750000 => 0.05,
        15100000 => 0.06,
        16950000 => 0.07,
        19750000 => 0.08,
        24150000 => 0.09,
        26450000 => 0.10,
        28000000 => 0.11,
        30050000 => 0.12,
        32400000 => 0.13,
        35400000 => 0.14,
        39100000 => 0.15,
        43850000 => 0.16,
        47800000 => 0.17,
        51400000 => 0.18,
        56300000 => 0.19,
        62200000 => 0.20,
        68600000 => 0.21,
        77500000 => 0.22,
        89000000 => 0.23,
        103000000 => 0.24,
        125000000 => 0.25,
        157000000 => 0.26,
        206000000 => 0.27,
        337000000 => 0.28,
        454000000 => 0.29,
        550000000 => 0.30,
        695000000 => 0.31,
        910000000 => 0.32,
        1400000000 => 0.33,
    ];

    // PTKP TK/2, TK/3, K/1, K/2
    private $terB = [
        6200000 => 0,
        6500000 => 0.0025,
        6850000 => 0.005,
        7300000 => 0.0075,
        9200000 => 0.01,
        10750000 => 0.015,
        11250000 => 0.02,
        11600000 => 0.025,
        12600000 => 0.03,
        13600000 => 0.04,
        14950000 => 0.05,
        16400000 => 0.06,
        18450000 => 0.07,
        21850000 => 0.08,
        26000000 => 0.09,
        27700000 => 0.10,
        29350000 => 0.11,
        31450000 => 0.12,
        33950000 => 0.13,
        37100000 => 0.14,
        41100000 => 0.15,
        45800000 => 0.16,
        49500000 => 0.17,
        53800000 => 0.18,
        58500000 => 0.19,
        64000000 => 0.20,
        71000000 => 0.21,
        80000000 => 0.22,
        93000000 => 0.23,
        109000000 => 0.24,
        129000000 => 0.25,
        163000000 => 0.26,
        211000000 => 0.27,
        374000000 => 0.28,
        459000000 => 0.29,
        555000000 => 0.30,
        704000000 => 0.31,
        957000000 => 0.32,
        1405000000 => 0.33,
    ];

    // PTKP K/3
    private $terC = [
        6600000 => 0,
        6950000 => 0.0025,
        7350000 => 0.005,
        7800000 => 0.0075,
        8850000 => 0.01,
        9800000 => 0.0125,
        10950000 => 0.015,
        11200000 => 0.0175,
        12050000 => 0.02,
        12950000 => 0.03,
        14150000 => 0.04,
        15550000 => 0.05,
        17050000 => 0.06,
        19500000 => 0.07,
        22700000 => 0.08,
        26600000 => 0.09,
        28100000 => 0.10,
        30100000 => 0.11,
        32600000 => 0.12,
        35400000 => 0.13,
        38900000 => 0.14,
        43000000 => 0.15,
        47400000 => 0.16,
        51200000 => 0.17,
        55800000 => 0.18,
        60400000 => 0.19,
        66700000 => 0.20,
        74500000 => 0.21,
        83200000 => 0.22,
        95000000 => 0.23,
        110000000 => 0.24,
        134000000 => 0.25,
        169000000 => 0.26,
        221000000 => 0.27,
        390000000 => 0.28,
        463000000 => 0.39,
        561000000 => 0.30,
        709000000 => 0.31,
        965000000 => 0.32,
        1419000000 => 0.33,
    ];

    public function getPTKPRates(): array
    {
        return $this->ptkpRates;
    }

    public function calculatePph21TER($grossSalary, $status)
    {
        $categoryTER = 'None';
        $pphAmount = 0;
        $taxRate = 0;

        if (in_array($status, ['TK0', 'TK1', 'K0'])) {
            $categoryTER = 'A';
            $taxRate = $this->getTERRate($grossSalary, $this->terA);
        } elseif (in_array($status, ['TK2', 'TK3', 'K1', 'K2'])) {
            $categoryTER = 'B';
            $taxRate = $this->getTERRate($grossSalary, $this->terB);
        } elseif (in_array($status, ['K3'])) {
            $categoryTER = 'C';
            $taxRate = $this->getTERRate($grossSalary, $this->terC);
        }

        // calculate
        $pphAmount = $grossSalary * $taxRate;
        $taxRate = $taxRate * 100;

        return [
            'dpp' => round($grossSalary),
            'category_ter' => $categoryTER,
            'pph' => round($pphAmount),
            'rate' => number_format($taxRate, 2) + 0
        ];
    }

    public function calculateTERGroosUp($grossSalary, $status)
    {
        $pph21 = $this->calculatePph21TER($grossSalary, $status);
        $taxRate = $pph21['rate'];

        $pphAmount = $grossSalary * ($taxRate / (100 - $taxRate));
        $bruto = $grossSalary + $pphAmount;

        $pph21 = $this->calculatePph21TER($bruto, $status);
        $taxRate2 = $pph21['rate'];

        if ($taxRate != $taxRate2) {
            $pphAmount = $grossSalary * ($taxRate2 / (100 - $taxRate2));
            $bruto = $grossSalary + $pphAmount;
        }

        return $this->calculatePph21TER($bruto, $status);
    }

    private function getTERRate(float $bruto, array $ter): float
    {
        $taxRate = 0;

        if ($bruto > array_key_last($ter)) {
            $taxRate = 0.34;
        } else {
            foreach ($ter as $limit => $rate) {
                $taxRate = $rate;
                if ($bruto <= $limit) break;
            }
        }

        return $taxRate;
    }

    public function calculatePph21($grossSalary, $status)
    {
        $monthlyExpense = min($grossSalary * 0.05, 500000);
        $netMonthlyIncome = $grossSalary - $monthlyExpense;

        $netAnnualIncome = $netMonthlyIncome * 12;

        $ptkp = $this->ptkpRates[$status] ?? 54000000;
        $pkp = max(0, $netAnnualIncome - $ptkp);

        $tax = 0;
        $remainingPKP = $pkp;
        $previousLimit = 0;

        foreach ($this->taxBrackets as $limit => $rate) {
            if ($remainingPKP <= 0) break;

            $taxableAmount = min($remainingPKP, $limit - $previousLimit);
            $tax += $taxableAmount * $rate;
            $remainingPKP -= $taxableAmount;
            $previousLimit = $limit;
        }

        return round($tax / 12);
    }

    public function calculateGrossUp($netSalary, $status)
    {
        $grossSalary = $netSalary;
        $previousPph21 = 0;

        do {
            $pph21 = $this->calculatePph21($grossSalary, $status);
            $grossSalary = $netSalary + $pph21;
        } while ($pph21 !== $previousPph21 && abs($pph21 - $previousPph21) > 1);

        return $grossSalary;
    }

    public function calculatePph21Pension($grossPension, $status, $pensionContribution = 0)
    {
        $monthlyExpense = min($grossPension * 0.05, 500000);
        $netMonthlyIncome = $grossPension - $monthlyExpense - $pensionContribution;
        $netAnnualIncome = $netMonthlyIncome * 12;

        $ptkp = $this->ptkpRates[$status] ?? 54000000;
        $pkp = max(0, $netAnnualIncome - $ptkp);

        $tax = 0;
        $remainingPKP = $pkp;
        $previousLimit = 0;

        foreach ($this->taxBrackets as $limit => $rate) {
            if ($remainingPKP <= 0) break;

            $taxableAmount = min($remainingPKP, $limit - $previousLimit);
            $tax += $taxableAmount * $rate;
            $remainingPKP -= $taxableAmount;
            $previousLimit = $limit;
        }

        return round($tax / 12);
    }
}
