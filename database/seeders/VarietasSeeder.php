<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Varietas;

class VarietasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $varietas = Varietas::create ([
            "komoditas" => "padi",
            "varietas" => "IR64",
            "keterangan" => ""
        ]);

        $varietas = Varietas::create ([
            "komoditas" => "jagung",
            "varietas" => "Bima",
            "keterangan" => ""
        ]);

        $varietas = Varietas::create ([
            "komoditas" => "kedelai",
            "varietas" => "Deja",
            "keterangan" => ""
        ]);
    }
}
