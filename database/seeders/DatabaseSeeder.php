<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\calendario;
use App\Models\categorias;
use App\Models\centros_consumo_detalles;
use App\Models\centros_consumo_horarios;
use App\Models\centros_consumo;

use App\Models\hoteles;
use App\Models\locaciones;
use App\Models\propiedades;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Deshabilita fk
        Schema::disableForeignKeyConstraints();
        calendario::truncate();
        categorias::truncate();
        centros_consumo_detalles::truncate();
        centros_consumo_horarios::truncate();
        centros_consumo::truncate();

        hoteles::truncate();
        locaciones::truncate();
        propiedades::truncate();

        $sql_general = \Storage::path('sql/general.sql');
        \DB::unprepared(file_get_contents($sql_general));
    }
}
