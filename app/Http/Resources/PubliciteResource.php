<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PubliciteResource extends JsonResource
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
            'publicite_id' => $this->id,
            'publicite_title' => $this->title,
            'publicite_url' => $this->url
        ];
    }
}
