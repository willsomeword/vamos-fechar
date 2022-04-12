<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

use Illuminate\Support\Facades\Hash;

class usuarioseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = new user();
        $usuario->name ="wilson Rodrigues";
        $usuario->email ="wilsonloja.com@hotmail.com";
        $usuario->password =  Hash::make("123456");
        $usuario->save();
    }
}
