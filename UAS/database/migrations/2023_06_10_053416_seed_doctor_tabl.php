<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('doctors')->insert([
            [
                'nama' => 'Hj. dr. Indah Desri Wahyuni, Sp.A, M.Kes ',
                'spesialis' => 'Dokter Anak',
                'foto' => '',
            ],
            [
                'nama' => 'dr. Sinung Agung Cahyono Sp.A',
                'spesialis' => 'Dokter Anak',
                'foto' => '',
            ],
            [
                'nama' => 'dr. Cianando Pautrisio Cendranadi, BMedSc,SpU,FICS ',
                'spesialis' => 'Dokter Bedah',
                'foto' => '',
            ],
            [
                'nama' => 'dr. Gilbert Zaini, M.Surg,FCCS, Sp.B, FCSI, FInaCS,FiCS ',
                'spesialis' => 'Dokter Bedah',
                'foto' => '',
            ],
            [
                'nama' => 'drg. Bintang Timurlangit Sp.Ort ',
                'spesialis' => 'Dokter Gigi',
                'foto' => '',
            ],
            [
                'nama' => 'drg. Raqqat Asmara, Sp.Pros',
                'spesialis' => 'Dokter Gigi',
                'foto' => '',
            ],
            [
                'nama' => 'Dr. Michael Harry, Sp.M, AIFO-K, CP.NLP',
                'spesialis' => 'Dokter Mata',
                'foto' => '',
            ],
            [
                'nama' => 'Dr. Christoper John, Sp.M',
                'spesialis' => 'Dokter Mata',
                'foto' => '',
            ],
            [
                'nama' => 'Dra. Ananda Ayu Putri, S.Psi, M.Psi, Psikolog',
                'spesialis' => 'Psikolog',
                'foto' => '',
            ],
            [
                'nama' => 'Richard Tandean, M.Psi, Psikolog',
                'spesialis' => 'Psikolog',
                'foto' => '',
            ],
            [
                'nama' => 'dr. Mahdi Husein Punca, Sp.PD-KKV, FINASIM, FAPSC, FSCAI',
                'spesialis' => 'Dokter Penyakit Dalam',
                'foto' => '',
            ],
            [
                'nama' => 'dr. Bayu Baskoro Adjie, Sp.OG, M.Kes',
                'spesialis' => 'Dokter Kandungan',
                'foto' => '',
            ],
            [
                'nama' => 'dr. Sensen SP.PD - KGEH, FINASIM',
                'spesialis' => 'Dokter Penyakit Dalam',
                'foto' => '',
            ],
            [
                'nama' => 'dr. Nabila, Sp. THT-KL',
                'spesialis' => 'Dokter THT',
                'foto' => '',
            ]
            
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('doctors', function (Blueprint $table) {

            DB::table('doctors')->truncate();
        });
    }
};
