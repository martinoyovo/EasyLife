<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommandResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'command_id' => $this->id,
            'command_address' => $this->address,
            'command_date' => $this->date,
            'command_mode_payment' => $this->mode_payment,
            'command_user_id' => $this->user_id,
            'command_service' => $this->service,
            'command_price' => $this->price
        ];
    }
}
