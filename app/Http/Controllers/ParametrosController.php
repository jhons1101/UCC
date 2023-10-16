<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Parameter;

class ParametrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parametros = DB::table('parameters')
                    ->select('*')
                    ->paginate(6);

        return view('parametros.index')
                ->with('parametros', $parametros);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        // Validamos que exista el parametro segun el id
        $existsParametro = Parameter::where('id', '=', $id)->firstOrFail();

        // se obtiene la información del parametro...
        $parametro = DB::table('parameters as p')
                ->select('p.*')
                ->where('p.id', $existsParametro->id)->get();
        
        return view('parametros.edit')
                ->with('parametro', $parametro[0])
                ->with('action',    'Editar')
                ->with('status',    null)
                ->with('message',   '')
                ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $parameter         = Parameter::where('id', $id)->firstOrFail();
        $parameter->value  = $request->get('value');

        try {

            $parameter->save();

            return  redirect()->route('parametros.index')
                    ->with('status',    1)
                    ->with('message',  'Se actualizó correctamente la información del parámetro');
        
        } catch (\Illuminate\Database\QueryException $ex) {
            return  redirect()->route('parametros.index')
                    ->with('status',   0)
                    ->with('message',  $ex->errorInfo[2]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
