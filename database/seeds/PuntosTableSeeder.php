<?php

use App\Punto;
use Illuminate\Database\Seeder;

class PuntosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Punto::class)->times(10)->create(['tipo' => 'inicial']);
        factory(Punto::class)->times(10)->create(['tipo' => 'final']);
        factory(Punto::class)->times(50)->create();
    }
}
