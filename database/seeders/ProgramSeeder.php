<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $program = new Program;
        $program->cabang_id = 3;
        $program->nama_jurusan = 'TKJ';
        $program->kuota = 3;
        $program->save();
        $this->command->info('Jurusan berhasil diinsert');

        $program = new Program;
        $program->cabang_id = 3;
        $program->nama_jurusan = 'RPL';
        $program->kuota = 3;
        $program->save();
        $this->command->info('Jurusan berhasil diinsert');

        $program = new Program;
        $program->cabang_id = 3;
        $program->nama_jurusan = 'DKV';
        $program->kuota = 3;
        $program->save();
        $this->command->info('Jurusan berhasil diinsert');

        $program = new Program;
        $program->cabang_id = 3;
        $program->nama_jurusan = 'SMP';
        $program->kuota = 3;
        $program->save();
        $this->command->info('Jurusan berhasil diinsert');
    }
}
