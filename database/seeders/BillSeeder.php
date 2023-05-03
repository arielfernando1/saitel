<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clientId = 21;

        // Generate 5 bills for the client
        for ($i = 1; $i <= 12; $i++) {
            DB::table('bills')->insert([
                'client_id' => $clientId,
                'branch' => 'MATRIZ',
                // January to December 2022
                'date' => '2022-' . $i . '-01',
                'total' => 21.69,
                'status' => 'Pagado',
            ]);
        }
    }
}
