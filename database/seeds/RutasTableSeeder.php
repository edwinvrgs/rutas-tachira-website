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

        $rutas = factory(Ruta::class)->times(15)->create();

        foreach($rutas as $ruta) {

            $empresa = Empresa::orderByRaw(DB::raw('RAND()'))->first();

            $punto_inicial = Punto::where('tipo', 'LIKE', "%inicial%")->orderByRaw(DB::raw('RAND()'))->first();
            $punto_final = Punto::where('tipo', 'LIKE', "%final%")->orderByRaw(DB::raw('RAND()'))->first();
            $puntos_intermedios = Punto::where('tipo', 'LIKE', "%intermedio%")->orderByRaw(DB::raw('RAND()'))->take(8)->get();

            $ruta->puntos()->attach($punto_inicial);
            $ruta->puntos()->attach($punto_final);
            $ruta->puntos()->saveMany($puntos_intermedios);

            $empresa->rutas()->save($ruta);
        }
    }
}
