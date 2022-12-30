<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $useradmin=User::create([
            'name' => 'admin admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'fullacces' => 'yes',
            'codigo' => 'admin1'
        ]);
        $user1=User::create([
            'name' => 'usuario juan',
            'email' => 'juan@gmail.com',
            'password' => Hash::make('juan'),
            'fullacces' => 'no',
            'codigo' => 'casa1'


        ]);
    }
}
