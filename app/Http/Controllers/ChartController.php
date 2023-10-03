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
        $quest6 = $getResponse->where('response_id',6)->countBy('user_response');
        return response()->json([
            'status' => 'Done',
            'message' => 'La liste des réponses de la questions6 a été récuperer avec succes',
            'question6' => $quest6 // On retourne le nombre de réponses de la questions 6 
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
            $quest7 = $getResponse->where('response_id',7)->countBy('user_response');
            return response()->json([
                'status' => 'Done',
                'message' => 'La liste des réponses de la questions 7 a été récuperer avec succes',
                'question7' => $quest7 // On retourne le nombre de réponses de la questions 7
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
    
            // Variable pour compter les réponses donner a la questions7
            $quest10 = $getResponse->where('response_id',10)->countBy('user_response');
            return response()->json([
                'status' => 'Done',
                'message' => 'La liste des réponses de la questions 10 a été récuperer avec succes',
                'question10' => $quest10 // On retourne le nombre de réponses de la questions 7
            ]);
        } catch (Exception $error) {
            return response()->json(
                $error
            );
        }
    }

    
}


