<?php

namespace App\Http\Controllers;

use App\Http\Requests\SegmentoStoreRequest;
use App\Http\Resources\Segmento as SegmentoResource;
use App\Segmento;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;

class SegmentoController extends Controller
{
    use SoftDeletes;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $segmentos = Segmento::all();
        $seg = SegmentoResource::make($segmentos);
        return view('dashboard/admin/segmento/index')
            ->with('segmentos', $segmentos);
//        return response(Segmento::all()->toJson(), 200);
//        $segmentos = Segmento::withTrashed()->get();

//        return response($segmentos, 200);
//        return Segmento::all()->pluck('descricao', 'id')->toJson();
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
    public function store(SegmentoStoreRequest $request)
    {
        $dados = $request->all();
        $segmento = Segmento::create($dados);
        return response($segmento, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Segmento  $segmento
     * @return \Illuminate\Http\Response
     */
    public function show(Segmento $segmento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Segmento  $segmento
     * @return \Illuminate\Http\Response
     */
    public function edit(Segmento $segmento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Segmento  $segmento
     * @return \Illuminate\Http\Response
     */
    public function update(SegmentoStoreRequest $request, Segmento $segmento)
    {
        $segmento->update($request->all());
        return response($segmento->toJson(), 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Segmento  $segmento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Segmento $segmento)
    {
        $segmento->delete();
        return response($segmento->toJson(), 200);
    }

}
