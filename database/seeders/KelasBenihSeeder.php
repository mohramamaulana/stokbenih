<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KelasBenih;


class KelasBenihSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kb = KelasBenih::create([ "kelas_benih" =>"Dasar"]);
        $kb = KelasBenih::create([ "kelas_benih" =>"Pokok"]);
        $kb = KelasBenih::create([ "kelas_benih" =>"Sebar1"]);
        $kb = KelasBenih::create([ "kelas_benih" =>"Dasar2"]);

    }
}
