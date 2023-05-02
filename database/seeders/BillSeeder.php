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
        $clientId = 1;

        // Generate 5 bills for the client
        for ($i = 1; $i <= 5; $i++) {
            DB::table('bills')->insert([
                'client_id' => $clientId,
                'branch' => 'MATRIZ',
                'date' => '2021-01-0' . $i,
                'total' => 21.69,
                'status' => 'Pagado',
            ]);
        }
    }
}
