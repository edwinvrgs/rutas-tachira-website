<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ruta;
use App\Punto;
use App\Http\Requests;

class RutasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax()) {
            $this->validate(request(), [
                'note' => ['max:100']
            ]);

            $value = request()->input('punto');
            $puntos = Punto::where('descripcion', 'LIKE', '%'.trim($value).'%')->get();

            $rutas = collect([]);

            foreach ($puntos as $punto)
                foreach($punto->rutas as $ruta_aux)
                    $rutas->push($ruta_aux);

            $rutas = $rutas->unique('id')->sortBy('id');

            return response()->json(
              ['html' => view('rutas/list', compact('rutas'))->render()]
            );
        } else {
            $rutas = Ruta::all();
            return view('rutas/index', compact('rutas'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
