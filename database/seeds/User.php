<?php

use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            
            'name' => '直也',
            'email' => 'test@gmail.com',
            'password' => 'aaaaaaaa'
        ];
    \App\User::create($user);
        
    
}

}