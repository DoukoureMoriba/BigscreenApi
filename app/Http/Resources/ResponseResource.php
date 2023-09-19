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
    return [
        'user_id' => $this->first()->user_id, // Utilisateur associé à ces réponses
        'responses' => $this->map(function ($response) {
            return [
                'id' => $response->id,
                'response_id' => $response->response_id,
                'user_response' => $response->user_response,
                'question_body' => $response->respQuest->question_body,
            ];
        }),
    ];
}

}
