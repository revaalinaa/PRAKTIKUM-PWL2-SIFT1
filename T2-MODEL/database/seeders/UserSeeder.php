<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        
        $faker = Faker::create();

        for ($i = 1; $i <= 50; $i++) {

            $urutan = str_pad($i, 3, '0', STR_PAD_LEFT);

            $npm = "5520124" . $urutan;

            DB::table('users')->insert([
                'npm' => $npm,
                'username' => $faker->userName,
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->unique()->safeEmail,
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
