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
        DB::table('jadwals')->insert([
            [
                'idDokter' => '1',
                'jadwalPraktik' => 'Senin 08.00-12.00'
            ],
            [
                'idDokter' => '1',
                'jadwalPraktik' => 'Selasa 08.00 - 12.00'
            ],
            [
                'idDokter' => '1',
                'jadwalPraktik' => 'Rabu 08.00 - 10.00'
            ],
            [
                'idDokter' => '1',
                'jadwalPraktik' => 'Kamis 08.00 - 09.00'
            ],
            [
                'idDokter' => '1',
                'jadwalPraktik' => 'Jumat 08.00 - 15.00'
            ],
            [
                'idDokter' => '2',
                'jadwalPraktik' => 'Selasa 10.00 - 12.00'
            ],
            [
                'idDokter' => '2',
                'jadwalPraktik' => 'Kamis 10.00-12.00'
            ],
            [
                'idDokter' => '3',
                'jadwalPraktik' => 'Selasa 12.00 - 14.00'
            ],
            [
                'idDokter' => '3',
                'jadwalPraktik' => 'Kamis 09.00 - 12.00'
            ],
            [
                'idDokter' => '3',
                'jadwalPraktik' => 'Sabtu 09.00 - 12.00'
            ],
            [
                'idDokter' => '4',
                'jadwalPraktik' => 'Senin 16.00 - 20.00'
            ],
            [
                'idDokter' => '4',
                'jadwalPraktik' => 'Rabu 16.00 - 20.00'
            ],
            [
                'idDokter' => '5',
                'jadwalPraktik' => 'Senin 15.30 - 19.00'
            ],
            [
                'idDokter' => '5',
                'jadwalPraktik' => 'Selasa 09.30 - 15.00'
            ],
            [
                'idDokter' => '5',
                'jadwalPraktik' => 'Rabu 09.30 - 15.00'
            ],
            [
                'idDokter' => '5',
                'jadwalPraktik' => 'Kamis 15.30 - 18.00'
            ],
            [
                'idDokter' => '6',
                'jadwalPraktik' => 'Jumat 16.00 - 19.00'
            ],
            [
                'idDokter' => '7',
                'jadwalPraktik' => 'Senin 10.00 - 14.00'
            ],
            [
                'idDokter' => '7',
                'jadwalPraktik' => 'Rabu 10.00 - 14.00'
            ],
            [
                'idDokter' => '7',
                'jadwalPraktik' => 'Sabtu 15.00 - 18.00'
            ],
            [
                'idDokter' => '8',
                'jadwalPraktik' => 'Senin.13.00 - 16.00'
            ],
            [
                'idDokter' => '8',
                'jadwalPraktik' => 'Rabu 13.00 - 18.00'
            ],
            [
                'idDokter' => '8',
                'jadwalPraktik' => 'Kamis 13.00 - 15.00'
            ],
            [
                'idDokter' => '8',
                'jadwalPraktik' => 'Jumat 09.00 - 12.00'
            ],
            [
                'idDokter' => '9',
                'jadwalPraktik' => 'Senin 16.00 - 18.00'
            ],
            [
                'idDokter' => '9',
                'jadwalPraktik' => 'Selasa 16.00 - 18.00'
            ],
            [
                'idDokter' => '9',
                'jadwalPraktik' => 'Rabu 18.00-.20.00'
            ],
            [
                'idDokter' => '10',
                'jadwalPraktik' => 'Selasa 15.00 - 17.00'
            ],
            [
                'idDokter' => '10',
                'jadwalPraktik' => 'Kamis 15.00 - 17.00'
            ],
            [
                'idDokter' => '10',
                'jadwalPraktik' => 'Sabtu 12.00 - 14.00'
            ],
            [
                'idDokter' => '11',
                'jadwalPraktik' => 'Senin 15.30 - 19.00'
            ],
            [
                'idDokter' => '11',
                'jadwalPraktik' => 'Selasa 09.30 - 15.00'
            ],
            [
                'idDokter' => '11',
                'jadwalPraktik' => 'Jumat 09.30 - 15.00'
            ],
            [
                'idDokter' => '12',
                'jadwalPraktik' => 'Jumat 16.00 - 19.00'
            ],
            [
                'idDokter' => '12',
                'jadwalPraktik' => 'Sabtu 8.00 - 10.00'
            ],
            [
                'idDokter' => '13',
                'jadwalPraktik' => 'Senin 13.00-15.00'
            ],
            [
                'idDokter' => '13',
                'jadwalPraktik' => 'Selasa 13.00-15.00'
            ],
            [
                'idDokter' => '13',
                'jadwalPraktik' => 'Rabu 13.00-15.00'
            ],
            [
                'idDokter' => '14',
                'jadwalPraktik' => 'Senin 16.00-18.00'
            ],
            [
                'idDokter' => '14',
                'jadwalPraktik' => 'Kamis 16.00-18.00'
            ],
            [
                'idDokter' => '14',
                'jadwalPraktik' => 'Sabtu 15.00-17.00'
            ]
            
            
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('jadwals', function (Blueprint $table) {

            DB::table('jadwals')->truncate();
        });
    }
};
