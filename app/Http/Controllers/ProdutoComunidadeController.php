<?php

namespace App\Http\Controllers;

use App\CatalogoComunidade;
use Illuminate\Http\Request;
use App\Http\Resources\CatalogosResource;

class CatalogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function api_v1_catalogo_index()
    {
        $catalogo = CatalogoComunidade::where('comunidade_id', '=', '1');
        dd($catalogo);
//        $catalogo = CatalogoComunidade::with('comunidade')->get();
//        dd($catalogo->comunidade);
//        dd($catalogo->comunidade);
        return response(CatalogosResource::collection($catalogo)->toJson(), 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CatalogoComunidade  $catalogo
     * @return \Illuminate\Http\Response
     */
    public function show(CatalogoComunidade $catalogo)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CatalogoComunidade  $catalogo
     * @return \Illuminate\Http\Response
     */
    public function edit(CatalogoComunidade $catalogo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CatalogoComunidade  $catalogo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CatalogoComunidade $catalogo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CatalogoComunidade  $catalogo
     * @return \Illuminate\Http\Response
     */
    public function destroy(CatalogoComunidade $catalogo)
    {
        //
    }
}
