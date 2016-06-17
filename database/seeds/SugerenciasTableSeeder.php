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
        $users = User::all();
        $empresas = Empresa::all();

        $sugerencias = factory(Sugerencia::class)->times(20)->make();

        foreach($sugerencias as $sugerencia) {
            $sugerencia->empresa()->save($empresas->random());
            $users->random()->sugerencias()->save($sugerencia);
        }
    }
}
