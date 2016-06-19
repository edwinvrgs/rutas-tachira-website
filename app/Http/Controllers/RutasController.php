<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ruta;
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
        $rutas = Ruta::all();

        return view('rutas/rutas', compact('rutas'));
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
        if($request->ajax()) {
            $ruta = $request->input('ruta');
            $rutas = Ruta::where('descripcion', 'LIKE', "%$ruta%")->get();

            $inner = '';
            // Ruta (id), descripcion, pasaje, puntos
            foreach($rutas as $ruta) {

                $inner .= '<tr>';
                $inner .= '<td>'.$ruta->id.'</td>';
                $inner .= '<td>'.$ruta->descripcion.'</td>';
                $inner .= '<td>'.$ruta->pasaje.'</td>';

                $inner .= '<td>';
                $check = false;
                foreach($ruta->puntos as $punto) {
                    $inner .= $check ? '->' : '';
                    $inner .= $punto->descripcion;
                    $check = true;
                }
                $inner .= '</td>';

                $inner .= '</tr>';
            }

            return $inner;
        }
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
