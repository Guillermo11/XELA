<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            App\User::create([
          'name' => 'Guillermo Tzunun',
          'email'=> 'llemo_@hotmail.com',
          'password' => bcrypt('Memo111921')
        ]);  //
    }
}
