<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('clients')->insert(
            [
                'title' => 'mr.', 
                'name' => 'Jhon', 
                'last_name' => 'Doe', 
                'address' => 'Street 123', 
                'zip_code' => '10236', 
                'city' => 'Tulsa', 
                'state' => 'OK', 
                'email' => 'john@example.com', 
            ]
        );
        DB::table('clients')->insert(
            [
                'title' => 'mrs', 
                'name' => 'Jain', 
                'last_name' => 'Doe', 
                'address' => 'Another street 456', 
                'zip_code' => '0000', 
                'city' => 'LA', 
                'state' => 'CA', 
                'email' => 'jain@example.com', 
            ]
        );
    }
}
