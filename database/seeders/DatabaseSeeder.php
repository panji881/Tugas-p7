<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::create([ 
            'nama' => 'Administrator', 
            'email' => 'admin@gmail.com', 
            'role' => '1', 
            'status' => 1, 
            'hp' => '081783647980', 
            'password' => bcrypt('P@55word'), 
        ]); 

                 #untuk record berikutnya silahkan, beri nilai berbeda pada nilai: nama, email, hp dengan masing-masing anggota kelompok 

        User::create([ 
            'nama' => 'Cahyono', 
            'email' => 'cahyo@gmail.com', 
            'role' => '0', 
            'status' => 1, 
            'hp' => '081318880851', 
            'password' => bcrypt('P@55word'), 
        ]); 
    }
}
