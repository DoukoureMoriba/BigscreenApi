<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Responses;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function pieCharts()
    {

        try {
            // Variable pour recuperer toute les réponses
            $getResponse = Responses::all();

            // Variable pour compter les réponses donner a la questions6
            $quest6 = $getResponse->where('response_id', 6)->countBy('user_response');
            return response()->json([
                'status' => 'Done',
                'message' => 'La liste des réponses de la questions6 a été récuperer avec succes',
                'question6' => $quest6 // Je retourne le nombre de réponses de la question 6 
            ]);
        } catch (Exception $error) {
            return response()->json(
                $error
            );
        }
    }


    public function PieCharts7()
    {
        try {
            // Variable pour recuperer toute les réponses
            $getResponse = Responses::all();

            // Variable pour compter les réponses donner a la questions7
            $quest7 = $getResponse->where('response_id', 7)->countBy('user_response');
            return response()->json([
                'status' => 'Done',
                'message' => 'La liste des réponses de la questions 7 a été récuperer avec succes',
                'question7' => $quest7 // Je retourne le nombre de réponses de la questions 7
            ]);
        } catch (Exception $error) {
            return response()->json(
                $error
            );
        }
    }

    public function PieCharts10()
    {
        try {
            // Variable pour recuperer toute les réponses
            $getResponse = Responses::all();

            // Variable pour compter les réponses donner a la questions 10
            $quest10 = $getResponse->where('response_id', 10)->countBy('user_response');
            return response()->json([
                'status' => 'Done',
                'message' => 'La liste des réponses de la questions 10 a été récuperer avec succes',
                'question10' => $quest10 // Je retourne le nombre de réponses de la questions 10
            ]);
        } catch (Exception $error) {
            return response()->json(
                $error
            );
        }
    }



    //Fonction pour les radarsCharts de 11 a 15
    public function radarCharts()
    {
        try {

            // Variable pour recuperer toute les réponses
            $getResponse = Responses::all();

            // J'initialise un tableau pour stocker les moyennes des réponses de la question 11 à 15
            $average = [];

            // Je fais une boucle de la question 11 à 15 pour calculer les moyennes
            for ($i = 11; $i < 16; $i++) {
                array_push($average, $getResponse->where('response_id', $i)->avg('user_response'));
            }
            return response()->json([
                'status' => 'Done',
                'message' => 'La liste des réponses de la questions 11 a 15 a été récuperer avec succes',
                'average' => $average // Je retourne les moyennes des réponses des questions 11 à 15
            ]);
        } catch (Exception $error) {
            return response()->json(
                $error
            );
        }
    }
}
