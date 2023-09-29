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
            'message' => 'La liste des réponses a été récuperer avec succes',
            'question6' => $quest6 // On retourne le nombre de réponses de la questions 6 
        ]);
    } catch (Exception $error) {
        return response()->json(
            $error
        );
    }
    }
}
