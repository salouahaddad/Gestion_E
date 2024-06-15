<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\Module;
use App\Models\Prof;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants=Etudiant::all();
        return response()->json($etudiants);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $P=new Etudiant();
        $P->nom=$request->nom;
        $P->prenom=$request->prenom;
        $P->email=$request->email;
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
        return response()->json(Etudiant::find($id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getById($id)
    {
        $E=Etudiant::find($id);
        $E->notes=$E->Note();
if($E->notes!=null)
    for ($i = 0; $i < count($E->notes); $i++) {
        $E->notes[$i]->module =Module::find($E->notes[$i]->module_id);
        $E->notes[$i]->module->prof=Prof::find($E->notes[$i]->module->prof_id);
        // $note->module(); // Suppose que la méthode module() retourne le module associé à la note
    }
      //  $E->notes->Module=$E->notes->module();
        return response()->json($E);
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
        
        $P=Etudiant::find($id);
       // $P->id=$id;
        $P->nom=$request->nom;
        $P->prenom=$request->prenom;
        $P->email=$request->email;
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
        $P= Etudiant::find($id);
        $P->delete();
    }
}
