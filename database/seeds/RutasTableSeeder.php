<?php

use App\Ruta;
use App\Punto;
use App\Empresa;
use Illuminate\Database\Seeder;

class RutasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $empresas = Empresa::all();

        $puntos_iniciales = Punto::where('tipo', 'LIKE', "%inicial%")->get();
        $puntos_finales = Punto::where('tipo', 'LIKE', "%final%")->get();
        $puntos_intermedios = Punto::where('tipo', 'LIKE', "%intermedio%")->get();

        $rutas = factory(Ruta::class)->times(20)->create();

        foreach($rutas as $ruta) {

            $punto_inicial = $puntos_iniciales->random();
            $punto_final = $puntos_finales->random();
            $puntos_intermedios = collect($puntos_intermedios)->random(15);

            $ruta->puntos()->attach($punto_inicial);
            $ruta->puntos()->attach($punto_final);
            $ruta->puntos()->saveMany($puntos_intermedios);

            $empresas->random()->rutas()->save($ruta);
        }
    }
}
