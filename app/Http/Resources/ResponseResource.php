<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResponseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // Je commence par définir la structure du tableau de sortie.
        return [
            // Je récupère l'identifiant de l'utilisateur associé à ces réponses en utilisant le premier élément de la collection.
            'user_id' => $this->first()->user_id, 

            // Ensuite, je mappe chaque élément de la collection de réponses pour les transformer en un tableau.
            'responses' => $this->map(function ($response) {
                return [
                    'id' => $response->id, // Identifiant de la réponse
                    'response_id' => $response->response_id, // Identifiant de la question associée à la réponse
                    'user_response' => $response->user_response, // La réponse donnée par l'utilisateur
                    'question_body' => $response->respQuest->question_body, // Le corps de la question associée à la réponse
                ];
            }),
        ];
    }
}
