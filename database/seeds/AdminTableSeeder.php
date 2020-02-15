<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'Connectricks Admin',
            'username' => 'connectricks_master',
            'email' => 'connectricks_master@gmail.com',
            'job_title' => 'Master',
            'password' => Hash::make('connectricksadmin123@')
        ]);
    }
}
