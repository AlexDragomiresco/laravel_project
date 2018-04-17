<?php

use Illuminate\Database\Seeder;

class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('rooms')->insert(
             [
                 'name' => '100',
                 'floor' => 1,
                 'description' => 'Twin Bed'
             ]
         );
         DB::table('rooms')->insert(
             [
                 'name' => '200',
                 'floor' => 2,
                 'description' => 'Double Bed'
             ]
         );
         DB::table('rooms')->insert(
             [
                 'name' => '300',
                 'floor' => 3,
                 'description' => 'Large Bed'
             ]
         );
    }
}
