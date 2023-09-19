<?php

namespace App\Http\Controllers;

use App\Http\Resources\ResponseResource;
use Exception;
use App\Models\Responses;
use App\Models\User;
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

            // Groupement des réponses par utilisateur
        $responses = Responses::all()->groupBy('user_id');

            return response()->json([
                'status' => 'Done',
                'message' => 'La liste des réponses a été récuperer avec succes',
                'data' => ResponseResource::collection($responses), // On retourne une collection de réponses groupées par utilisateur.
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
    try {
        // Validez et traitez les données reçues depuis le front-end
        $validatedData = $request->validate([
            "email" =>  "required|email",
            "responses" => "required|array", // Assurez-vous que le nom du champ correspond à ce que vous envoyez depuis Vue.js
        ]);

        if ($validatedData) {
            $surveyUser = User::create(["email" => $validatedData["email"],"password"=> "password","role"=>"user"]);
            
            foreach ($validatedData["responses"] as $response) {
                $addResponse = new Responses();
                $addResponse->response_id = $response["questionId"];
                $addResponse->user_response = $response["userResponse"];
                $addResponse->user_id = $surveyUser->id; // Assurez-vous d'ajuster ceci en fonction de votre modèle User
                $addResponse->save();
            }

            return response()->json([
                'status' => 'Done',
                'message' => 'Réponses enregistrées avec succès',
            ]);
        } else {
            return response()->json([
                'status' => 'Error',
                'message' => 'Une erreur est survenue',
            ]);
        }

    } catch (Exception $error) {
        return response()->json($error);
    }   
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
