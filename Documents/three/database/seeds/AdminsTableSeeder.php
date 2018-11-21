<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Use Eloquent 
        \App\Admin::create([
            'name'	=> 'root',
            'email'	=> 'root@gmail.com',
            'job_title' => 'admin',
            'password'	=> bcrypt('123456789')
        ]);
    }
}
