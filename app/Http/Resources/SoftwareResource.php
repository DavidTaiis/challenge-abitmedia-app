<?php

namespace App\Http\Resources;

use App\Models\WalletsByUsers;
use Illuminate\Http\Resources\Json\JsonResource;

class SoftwareResource extends JsonResource
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
            'operativeSysem'=> $this->operative_system,
            'stock'=> $this->stock,
            'serial'=> $this->serial,
            'sku'=> $this->sku
        ];
    }
}
