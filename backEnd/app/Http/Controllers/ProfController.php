<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prof;

class ProfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profs=Prof::all();
        return response()->json($profs);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $P=new Prof();
        $P->nom=$request->nom;
        $P->prenom=$request->prenom;
        $P->specialite=$request->specialite;
        $P->save();
        return response()->json($P);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(Prof::find($id));
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
        $P=new Prof();
        $P->nom=$request->nom;
        $P->prenom=$request->prenom;
        $P->specialite=$request->specialite;
        $P->save();
        return response()->json($P);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $P= Prof::find($id);
        $P->delete();
    }
}
