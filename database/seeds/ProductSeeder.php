<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{

    public function run()
    {
        DB::table('products')->insert([
        	'pid' => '1',
            'name' => 'Daralo',
            'price' => '1.4',
            'description' => 'Egyseru daralo.'
        ]);

        DB::table('products')->insert([
        	'pid' => '2',
            'name' => 'Vasalo',
            'price' => '5',
            'description' => 'Egyseru vasalo.'
        ]);

        DB::table('products')->insert([
        	'pid' => '3',
            'name' => 'HDMI kabel',
            'price' => '2.2',
            'description' => 'Egyseru HDMI kabel.'
        ]);
    }
}
