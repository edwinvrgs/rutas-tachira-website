<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UsersTableSeeder::class);
        $this->call(EmpresasTableSeeder::class);
        $this->call(PuntosTableSeeder::class);
        $this->call(RutasTableSeeder::class);
        $this->call(SugerenciasTableSeeder::class);

        Model::reguard();
    }
}
