<?php

namespace Database\Seeders;

use App\Models\TaxCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaxCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // pph 21
        $data = [
            [
                'id' => 1,
                'parent_id' => null,
                'name' => 'PPh 21',
                'description' => 'PPh 21',
            ],
            [
                'id' => 2,
                'parent_id' => null,
                'name' => 'PPh 22',
                'description' => 'PPh 22',
            ],
            [
                'id' => 3,
                'parent_id' => null,
                'name' => 'PPh 23',
                'description' => 'PPh 23',
            ],
            [
                'id' => 4,
                'parent_id' => null,
                'name' => 'PPh 15',
                'description' => 'PPh 15',
            ],
            [
                'id' => 5,
                'parent_id' => null,
                'name' => 'PPh 4(2)',
                'description' => 'PPh 4(2)',
            ],
            [
                'id' => 6,
                'parent_id' => null,
                'name' => 'PPh Badan',
                'description' => 'PPh Badan',
            ],
            [
                'id' => 7,
                'parent_id' => null,
                'name' => 'PPn',
                'description' => 'PPn',
            ],
            [
                'id' => 8,
                'parent_id' => null,
                'name' => 'PPnBM',
                'description' => 'PPnBM',
            ],
        ];

        TaxCategory::insert($data);
        // sub
        $data = [
            [
                'id' => 9,
                'parent_id' => 1,
                'name' => 'PPh 21 Bulanan',
                'description' => 'PPh 21 Bulanan',
            ],
            [
                'id' => 10,
                'parent_id' => 1,
                'name' => 'PPh 21 Final',
                'description' => 'PPh 21 Final',
            ],
            [
                'id' => 11,
                'parent_id' => 1,
                'name' => 'PPh 21 Tidak Final',
                'description' => 'PPh 21 Tidak Final',
            ],
            [
                'id' => 12,
                'parent_id' => 1,
                'name' => 'PPh 21 Tahunan (A1/A2)',
                'description' => 'PPh 21 Tahunan (A1/A2)',
            ],
        ];

        TaxCategory::insert($data);
    }
}
