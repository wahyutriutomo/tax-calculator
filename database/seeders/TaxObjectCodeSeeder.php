<?php

namespace Database\Seeders;

use App\Models\TaxObjectCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaxObjectCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'tax_category_id' => 3,
                'code' => '24-101-01',
                'name' => 'Dividen',
                'description' => 'Dividen',
                'tax_rate' => 15,
            ],
            [
                'tax_category_id' => 3,
                'code' => '24-104-68',
                'name' => 'Jasa Penyelenggaraan Layanan Transaksi Pembayaran Terkait dengan Distribusi Voucer Oleh Penyelenggara Voucer dan Penyelenggara Distribusi',
                'description' => 'Jasa Penyelenggaraan Layanan Transaksi Pembayaran Terkait dengan Distribusi Voucer Oleh Penyelenggara Voucer dan Penyelenggara Distribusi',
                'tax_rate' => 2,
            ]
        ];

        TaxObjectCode::insert($data);
    }
}
