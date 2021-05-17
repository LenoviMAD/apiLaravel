<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ActualizarDietaRequest;
use App\Http\Requests\GuardarDietaRequest;
use Illuminate\Http\Request;
use App\Models\Dieta;

class DietaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Dieta::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarDietaRequest $request)
    {
        Dieta::create($request->all());
        return response()->json([
            'res' => true,
            'msg' => 'La dieta se guardo correctamente'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Dieta $dieta)
    {
        return response()->json([
            'res' => true,
            'dieta' => $dieta
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActualizarDietaRequest $request, Dieta $dieta)
    {
        $dieta->update($request->all());
        return response()->json([
            'res' => true,
            'mensaje' => 'Dieta actualizada conrrectamente'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dieta $dieta)
    {
        $dieta->delete();
        return response()->json([
            'res' => true,
            'mensaje' => 'Dieta Eliminado conrrectamente'
        ], 200);
    }
}
