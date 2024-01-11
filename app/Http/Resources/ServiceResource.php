<?php

namespace App\Http\Resources;

use App\Models\WalletsByUsers;
use Illuminate\Http\Resources\Json\JsonResource;

class ServiceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'item' => $this->item,
            'price' => $this->price,
            'sku'=> $this->sku
        ];
    }
}
