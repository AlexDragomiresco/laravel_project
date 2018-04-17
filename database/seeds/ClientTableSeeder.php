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
        DB::table('clients')->insert(
            [
                'title'     => 'Mr',
                'name'      => 'Jonas',
                'last_name' => 'Rieley',
                'address'   => 'Street',
                'zip_code'  => '345',
                'city'      => 'Frankfurt',
                'state'     => 'Main',
                'email'     => 'jonas@email.com',
            ]
        );
        DB::table('clients')->insert(
            [
                'title'     => 'Mrs',
                'name'      => 'Judith',
                'last_name' => 'Wolfhund',
                'address'   => 'Strasse',
                'zip_code'  => '34521',
                'city'      => 'Hamburg',
                'state'     => 'Elbe',
                'email'     => 'judith@email.com',
            ]
        );
    }
}
