<?php

use Illuminate\Database\Seeder;

class AccodeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 7; $i++) {
            DB::table('accodes')->insert([
                'activation_code' => 'CT-' . str_random(2) . '-' . date("G")  . str_random(2) ,
                'reseller' => 'connectricks_master@gmail.com',
                'prices' => 0.0,
                'status' => 'Available',
                'status' => 'Available',
                'notice' => 'Paid'
            ]);
        }
    }
}
