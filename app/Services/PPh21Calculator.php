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

    public function getPTKPRates(): array
    {
        return $this->ptkpRates;
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
