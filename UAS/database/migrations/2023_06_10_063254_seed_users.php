<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('users')->insert([
            [
                'email' => 'admin@gmail.com',
                'name' => 'admin',
                'tempatLahir' => 'admin',
                'tanggalLahir' => '2023-06-10',
                'noTelp' => '0812345678',
                'alamat' => 'admin',
                'jenisKelamin' => 'L',
                'password' => Hash::make('admin123'),
                'is_admin' => 1
            ],
            [
                'email' => 'ian@gmail.com',
                'name' => 'Ian Pangeswara Hermawan',
                'tempatLahir' => 'Surakarta',
                'tanggalLahir' => '2003-02-14',
                'noTelp' => '081325196443',
                'alamat' => 'Sampora, Cisauk, Tangerang Regency, Banten',
                'jenisKelamin' => 'L',
                'password' => Hash::make('123456789'),
                'is_admin' => 0
            ],
            [
                'email' => 'kheskur@gmail.com',
                'name' => 'Khesar Kurniawan',
                'tempatLahir' => 'Bekasi',
                'tanggalLahir' => '2003-04-24',
                'noTelp' => '089652642871',
                'alamat' => 'Kademangan, Setu, South Tangerang City, Banten',
                'jenisKelamin' => 'L',
                'password' => Hash::make('123456789'),
                'is_admin' => 0
            ],
            [
                'email' => 'pid@gmail.com',
                'name' => 'David Ongky',
                'tempatLahir' => 'Bojongkoneng',
                'tanggalLahir' => '2003-05-20',
                'noTelp' => '082345628092',
                'alamat' => 'Jl. Cendekia, Ciater, Kec. Serpong, Kota Tangerang Selatan, Banten 15310',
                'jenisKelamin' => 'L',
                'password' => Hash::make('123456789'),
                'is_admin' => 0
            ],
            [
                'email' => 'lidbel@gmail.com',
                'name' => 'Lydia Bella Puspita',
                'tempatLahir' => 'Tasikmalaya',
                'tanggalLahir' => '2003-01-31',
                'noTelp' => '084698218590',
                'alamat' => 'Blk. C 14-2, Kademangan, Kec. Setu, Kota Tangerang Selatan, Banten 15314',
                'jenisKelamin' => 'P',
                'password' => Hash::make('123456789'),
                'is_admin' => 0
            ]
            
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {

            DB::table('users')->truncate();
        });
    }
};

