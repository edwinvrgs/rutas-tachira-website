<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AplicationTest extends TestCase
{

    public function testRutasPage()
    {
        $this->visit('rutas')
            ->type('Lorem', 'search')
            ->see('Lorem');
    }

    public function testSugerenciasPage()
    {
        $this->visit('sugerencias')
            ->see('Edwin')
            ->see('Vargas')
            ->see('onix.edwin18@gmail.com');
    }
}
