<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SurveySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('surveys')->insert([
            'decription'=>'Samsung A5',
            'price'=>150.45,
            'city'=>'Belgrade'
        ]);
    }
}