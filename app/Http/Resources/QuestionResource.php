<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QuestionResource extends JsonResource
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
            'id' => $this->id, // L'identifiant unique de la question.
            'title' => $this->title, // Le titre de la question.
            'question_body' => $this->question_body, // Le texte principal de la question.
            'question_type' => $this->question_type, // Le type de la question.
            'propositions' => $this->questChoice->pluck('wording'), // J'utilise la méthode pluck pour extraire les choix de réponse associés à la question.
            // Ceci est possible grâce à la relation "questChoice" définie dans le modèle de question.
            // "pluck('wording')" signifie que je veux extraire la colonne "wording" des choix de réponse
            // et les stocker dans un tableau.
            
        ];
    }
}
