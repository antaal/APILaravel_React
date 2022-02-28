<?php

namespace App\Http\Controllers;

use App\Models\idee;
use Illuminate\Http\Request;

class IdeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return idee::All();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return idee::create($request->All());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\idee  $idee
     * @return \Illuminate\Http\Response
     */
    public function show(idee $idee)
    {
        return idee::find($idee->id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\idee  $idee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, idee $idee)
    {
        $idee = idee::find($idee->id);
        return $idee->update($request->All());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\idee  $idee
     * @return \Illuminate\Http\Response
     */
    public function destroy(idee $idee)
    {
        return idee::destroy($idee->id);
    }
}
