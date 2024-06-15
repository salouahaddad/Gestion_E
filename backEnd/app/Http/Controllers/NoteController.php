<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notes;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes=Notes::all();
        return response()->json($notes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       

        $P=new Notes();
        $P->note=$request->note;
        $P->etudiant_id=$request->etudiant_id;
        $P->module_id=$request->module_id;
       // $P->note=$request->note;
       // $P->prof_id=$request->prof_id;
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
        return response()->json(Notes::find($id));
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
        $P=Notes::find($id);
        // $P->id=$id;
         $P->note=$request->note;
         $P->etudiant_id=$request->etudiant_id;
         $P->module_id=$request->module_id;
         //$P->note=$request->note;
         //$P->prof_id=$request->prof_id;
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
        //
    }
}
