<?php
use \App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

    class UserTableSeeder extends Seeder {

        public function run()
        {
            DB::statement('SET FOREIGN_KEY_CHECKS=0');
            User::truncate();
            User::create([
                'name' => 'azmat',
                'email'    =>   'azmat.latif@gmail.com',
                'password' =>   \Hash::make('azmat')
            ]);
        }
    }
