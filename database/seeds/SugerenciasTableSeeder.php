<?php

use App\User;
use App\Empresa;
use App\Sugerencia;
use Illuminate\Database\Seeder;

class SugerenciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sugerencias = factory(Sugerencia::class)->times(20)->make();

        foreach($sugerencias as $sugerencia) {

            $user = User::orderByRaw(DB::raw('RAND()'))->first();
            $empresa = Empresa::orderByRaw(DB::raw('RAND()'))->first();

            $empresa->sugerencias()->save($sugerencia);
            $user->sugerencias()->save($sugerencia);
        }
    }
}
