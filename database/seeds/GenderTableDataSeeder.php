<?php

use Illuminate\Database\Seeder;

class GenderTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i=0; $i < 3; $i++) {
      DB::table('genders')->insert([
        'contact_id' => 1,
        'name' => 'male',
        'deleted_at' => '2018-04-24 17:32:28'
        ]);
    }
    }
}
