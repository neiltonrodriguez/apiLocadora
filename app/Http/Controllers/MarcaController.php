<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Services\PayUService\Exception;
use App\Models\Pessoas;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
       
        $t = Marca::all();
            
        
        return $t;

    }

    public function store(Request $request)
    {
        $marca = Marca::create($request->all());
        return $marca;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function show(Marca $marca)
    {
       
        return $marca;
    }

   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Marca $marca)
    {
        
        $marca->update($request->all());
        //print_r($request->all());
        
       // print_r($marca->getAttributes());
        return $marca;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marca $marca)
    {
        $marca->delete();
        return [
            'msg' => 'Marca deletada com sucesso'
        ];
    }
}
