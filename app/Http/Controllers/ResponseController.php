<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\Responses;
use Illuminate\Http\Request;
use App\Models\Pivot_user_response;
use App\Http\Resources\ResponseResource;

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
        // on Valide et traite les données reçues depuis le front-end
        $validatedData = $request->validate([
            "email" =>  "required|email",
            "responses" => "required|array", // on verifie si c'est un tableau depuis le front avant de recuperer les infos de ce dernier
        ]);

        if ($validatedData) {
            // on enregistre l'utilisateur dans la table user avec un mot de passe par defaut et un role
            $surveyUser = User::create(["email" => $validatedData["email"],"password"=> "password","role"=>"user"]);
            
            foreach ($validatedData["responses"] as $response) {
                $addResponse = new Responses();
                $addResponse->response_id = $response["questionId"];
                $addResponse->user_response = $response["userResponse"];
                $addResponse->user_id = $surveyUser->id; // On parcour le tableau $validatedData["responses"] avant d'envoyer les informations dans la table Responses
                $addResponse->save();
            }

    
            // on enregistre l'url de l'utilisateur dans la table pivot et on le crypte avec base64_encode
          $pivot =  Pivot_user_response::create(["pivot_user_id" => $surveyUser->id,"url"=>base64_encode("reponse_".$surveyUser->id)]);

            return response()->json([
                'status' => 'Done',
                'message' => 'Réponses enregistrées avec succès',
                'data' => $pivot,
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
    public function show($code)
    {
        //on recupere l'url de l utilissateur
        $user = Pivot_user_response::where("url","=",$code)->first();
        
        // a partir de l'url de l'utilisateur on recupere les réponses de ce dernier
            $responses = Responses::where("user_id","=",$user->pivot_user_id)->get();
        return response()->json([
            'status' => 'Done',
            'message' => 'La liste des réponses a été récuperer avec succes',
            'data' => $responses,
        ]);
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
