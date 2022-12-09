<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Shalat;
use App\Models\Dzikir;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'email' => 'admin@gmail.com',
            'nama' => 'Admin',
            'password' => bcrypt('admin'),
            'role' => 'Admin'
        ]);

        // User::create([
        //     'nis' => 1234567,
        //     'email' => 'user@gmail.com',
        //     'name' => 'User',
        //     'password' => bcrypt('user'),
        //     'kelas' => '11 RPL 1',
        //     'jenis_kelamin' => 'Laki-Laki',
        //     'role' => 'Siswa'
        // ]);

        User::create([
            'nis' => 7654321,
            'email' => 'nayla@gmail.com',
            'nama' => 'nayla',
            'password' => bcrypt('nayla'),
            'kelas' => '11 RPL 5',
            'jenis_kelamin' => 'Laki-Laki',
            'role' => 'Siswa'
        ]);

        User::create([
            'nis' => 9876543,
            'email' => 'anggi@gmail.com',
            'nama' => 'anggi',
            'password' => bcrypt('anggi'),
            'kelas' => '11 RPL 1',
            'jenis_kelamin' => 'Perempuan',
            'role' => 'Siswa'
        ]);

        User::create([
            'nis' => 12345678,
            'email' => 'nabila@gmail.com',
            'nama' => 'nabila',
            'password' => bcrypt('nabila'),
            'kelas' => '11 RPL 2',
            'jenis_kelamin' => 'Perempuan',
            'role' => 'Siswa'
        ]);

        User::create([
            'nis' => 35647899,
            'email' => 'ekse@gmail.com',
            'nama' => 'ekse',
            'password' => ('ekse'),
            'kelas' => '11 RPL 7',
            'jenis_kelamin' => 'Perempuan',
            'role' => 'Siswa'
        ]);


        Shalat::create([
            'name' => 'Shalat Subuh'
        ]);
        Shalat::create([
            'name' => 'Shalat Dzuhur'
        ]);
        Shalat::create([
            'name' => 'Shalat Ashar'
        ]);
        Shalat::create([
            'name' => 'Shalat Maghrib'
        ]);
        Shalat::create([
            'name' => 'Shalat Isya'
        ]);
        Shalat::create([
            'name' => 'Shalat Dhuha'
        ]);
        Shalat::create([
            'name' => 'Shalat Tahajud'
        ]);

        Dzikir::create([
            'name' => 'Dzikir Pagi'
        ]);
        Dzikir::create([
            'name' => 'Dzikir Sore'
        ]);
        Dzikir::create([
            'name' => 'Istigfar'
        ]);
        Dzikir::create([
            'name' => 'Shalawat'
        ]);

    }
}
