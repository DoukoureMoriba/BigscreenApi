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
        // return parent::toArray($request);

        return [
            'id' => $this->id,
            'title' => $this->title,
            'question_body' => $this->question_body,
            'question_type' => $this->question_type,
            'propositions' => $this->questChoice->pluck('wording'),// J'utilise la method pluck pour transformer le champ wording en tableau a cause de la relation hasmany
        ];
    }
}
