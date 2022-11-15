<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Laravolt\Avatar\Avatar;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);

        $admin = User::create([
            'name' => 'Super Admin',
            'email' => 'admin@localhost.com',
            'password' => bcrypt('password'),
            'alamat' => 'DKI Jakarta',
            'jenis_kelamin' => 'Laki-laki',
            'tanggal_lahir' => date('2005-01-20'),
            'tahun_lulus' => '2023',
            'pekerjaan' => 'Web Programmer',
            'hobby' => 'Mendengar musik',
            'no_telp' => '081586043931',
        ]);

        $admin->assignRole('Super Admin');

        $user = User::create([
            'name' => 'Henry Salim',
            'email' => 'henrysalim22@gmail.com',
            'password' => bcrypt('password'),
            'alamat' => 'DKI Jakarta',
            'jenis_kelamin' => 'Laki-laki',
            'tanggal_lahir' => date('2005-01-20'),
            'tahun_lulus' => '2023',
            'pekerjaan' => 'Web Programmer',
            'hobby' => 'Mendengar musik',
            'no_telp' => '081586043931',
        ]);

        $user->assignRole('User');
    }
}
