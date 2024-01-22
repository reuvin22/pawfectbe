<?php

namespace App\Http\Resources\User\v1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResouce extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'firstname' => $this->firstName,
            'lastName' => $this->lastName,
            'password' => $this->password,
            'email' => $this->email,
            'birthDay' => $this->birthDay,
            'termsAndCondition' => $this->termsAndCondition
        ];
    }
}
