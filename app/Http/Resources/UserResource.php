<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{

    public function toArray($request)
    {
       return [
        'data' => [
            'name' => $this->name()->value(),
            'email' => $this->email()->value(),
            'emailVerifiedAt' => $this->emailVerifiedAt()->value()
        ]
       ];
    }
}
