<?php
/**
 * Created by PhpStorm.
 * User: mithun.alinkil
 * Date: 29-11-2015
 * Time: 17:24
 */

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'name'     => 'Mithun',
            'username' => 'Mithun',
            'email'    => 'mithun@gmail.com',
            'password' => Hash::make('pass'),
        ));
    }

}