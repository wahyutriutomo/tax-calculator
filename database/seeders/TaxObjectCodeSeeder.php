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

        // pph 4(2)
        $pph42 = [
            [
                'tax_category_id' => 5,
                'code' => '42-100-01',
                'name' => 'PPh 4(2) - 1',
                'description' => 'PPh 4(2) - 1',
                'tax_rate' => 2,
            ],
            [
                'tax_category_id' => 5,
                'code' => '42-100-02',
                'name' => 'PPh 4(2) - 2',
                'description' => 'PPh 4(2) - 2',
                'tax_rate' => 5,
            ]
        ];
        TaxObjectCode::insert($pph42);

        // pph 22
        $pph22 = [
            [
                'tax_category_id' => 2,
                'code' => '22-100-01',
                'name' => 'PPh 22 - 1',
                'description' => 'PPh 22 - 1',
                'tax_rate' => 2,
            ],
            [
                'tax_category_id' => 2,
                'code' => '22-100-02',
                'name' => 'PPh 22 - 2',
                'description' => 'PPh 22 - 2',
                'tax_rate' => 5,
            ]
        ];
        TaxObjectCode::insert($pph22);

        // pph 15
        $pph15 = [
            [
                'tax_category_id' => 4,
                'code' => '15-100-01',
                'name' => 'PPh 15 - 1',
                'description' => 'PPh 15 - 1',
                'tax_rate' => 2,
            ],
            [
                'tax_category_id' => 4,
                'code' => '15-100-02',
                'name' => 'PPh 15 - 2',
                'description' => 'PPh 15 - 2',
                'tax_rate' => 5,
            ]
        ];
        TaxObjectCode::insert($pph15);

        // pph 21
        $pph21Data = [
            [
                'tax_category_id' => 9,
                'code' => '21-100-01',
                'name' => 'Pegawai Tetap',
                'description' => 'Pegawai Tetap',
                'tax_rate' => 0,
            ],
            [
                'tax_category_id' => 9,
                'code' => '21-100-02',
                'name' => 'Penerima Pensiun Berkala',
                'description' => 'Penerima Pensiun Berkala',
                'tax_rate' => 0,
            ]
        ];
        TaxObjectCode::insert($pph21Data);

        // pph badan
        $pphBadamData = [
            [
                'tax_category_id' => 6,
                'code' => '31E-1',
                'name' => 'Pasal 31E ayat (1)',
                'description' => 'Wajib Pajak Badan dalam negeri dengan peredaran bruto sampai dengan Rp. 50 Milyar mendapat fasilitas berupa pengurangan tarif sebesar 50%.',
                'tax_rate' => 0,
            ],
            [
                'tax_category_id' => 6,
                'code' => '17-1-B',
                'name' => 'Pasal 17 ayat (1) huruf b',
                'description' => 'Tarif pajak yang diterapkan atas Penghasilan Kena Pajak bagi Wajib Pajak Badan dalam negeri dan Bentuk Usaha Tetap.',
                'tax_rate' => 22,
            ],
            [
                'tax_category_id' => 6,
                'code' => '17-2-B',
                'name' => 'Pasal 17 ayat (2) huruf b',
                'description' => 'Wajib Pajak Badan dalam negeri berbentuk PT dapat memperoleh tarif 3% lebih rendah. Syaratnya paling sedikit 40% dari jumlah keseluruhan saham yang disetor diperdagangkan di BEI.',
                'tax_rate' => 19,
            ]
        ];
        TaxObjectCode::insert($pphBadamData);
    }
}
