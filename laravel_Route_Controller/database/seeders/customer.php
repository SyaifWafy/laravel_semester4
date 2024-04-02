<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class customer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customer')->insert([
            'nama_mhs' => 'Syaif Thufail Wafy',
            'alamat'   => 'Patrang',
            'ttl'      => '2003-08-12',
            'status'   => 'Mahasiswa'
        ]);
    }
}
