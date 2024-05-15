<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder {
    /**
    * Run the database seeds.
    */

    public function run(): void {
        DB::table( 'users' )->insert( [
            'company_name' => 'google',
            'team_number' => 1,
            'password' => Hash::make( '123' ),
        ] );

        DB::table( 'users' )->insert( [
            'company_name' => 'admin',
            'team_number' => 1,
            'password' => Hash::make( '123' ),
        ] );
    }
}
