<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produsen;


class ProdusenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produsen = Produsen::create([
            "nama" => "Avan Tani",
            "kabupaten" => "Malang",
            "no_telp" => "089535458",
        ]);

        $produsen = Produsen::create([
            "nama" => "Berkah Abadi",
            "kabupaten" => "Malang",
            "no_telp" => "089535459",
        ]);

        $produsen = Produsen::create([
            "nama" => "UD. Sari Bumi Indonesia",
            "kabupaten" => "Malang",
            "no_telp" => "089535450",
        ]);
    }
}
