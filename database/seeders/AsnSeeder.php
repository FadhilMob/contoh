<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\AsnModel;

class AsnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('asn')->insert([
            'id'=> '1',
            'bidang_id' => '2',
            'rhk_id' => '1',
            'nama' => 'Bu Pita',
            'nip' => '5050',
            'password' =>'12345',
            'image' => '',
        ]); 
    }
}
