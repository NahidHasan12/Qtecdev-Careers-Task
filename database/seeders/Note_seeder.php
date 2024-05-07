<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Note_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('notes')->insert([
            "user_id" => 1,
            "note_title" => 'Bangladesh',
            "note_detail" => 'AMar shonar Bangla',
        ]);
    }
}
