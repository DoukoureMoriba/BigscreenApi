<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Responses;
use Illuminate\Http\Request;

class ResponseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
        try {

            return response()->json([
                'status' => 'Done',
                'message' => 'La liste des réponses a été récuperer avec succes',
                'data' => Responses::all(),
            ]);
        } catch (Exception $error) {
            return response()->json(
                $error
            );
        }
        
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
        // Validez et traitez les données reçues depuis le front-end
        $validatedData = $request->validate([
            'responses' => 'required|array', // Assurez-vous que les réponses sont envoyées sous forme de tableau
            // Ajoutez d'autres règles de validation selon vos besoins
        ]);

        // Vous pouvez maintenant enregistrer ces réponses dans votre base de données ou effectuer toute autre opération nécessaire.

        // Répondez au client avec une confirmation de succès
        return response()->json(['message' => 'Réponses enregistrées avec succès']);
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
