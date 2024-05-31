<?php

namespace Database\Seeders;

use App\Models\Cabang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CabangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $program = new Cabang();
        $program->nama_cabang = 'IDN Jonggol Ikhwan';
        $program->save();
        $this->command->info('Jurusan berhasil diinsert');
        $program = new Cabang();
        $program->nama_cabang = 'IDN Jonggol Akhwat';
        $program->save();
        $this->command->info('Jurusan berhasil diinsert');
        $program = new Cabang();
        $program->nama_cabang = 'IDN Jonggol Sentul';
        $program->save();
        $this->command->info('Jurusan berhasil diinsert');
    }
}
