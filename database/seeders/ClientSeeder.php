<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;


class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // create 1 individual client
        DB::table('clients')->insert([
            'dni' => '1050363736',
            'first_name' => 'Ariel',
            'last_name' => 'Aguirre',
            'email' => 'ariel.aguirre@upec.edu.ec',
            'phone' => '0960759518',
            'address' => 'Calle Mexico y Atacazo',
            'city' => 'Tulcan',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        for ($i = 0; $i < 10; $i++) {
            DB::table('clients')->insert([
                'dni' => $faker->unique()->randomNumber(8),
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->email,
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'city' => $faker->city,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        
    }
}
