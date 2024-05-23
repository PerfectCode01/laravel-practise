<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InvoiceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'amount'=>$this->amount,
            'customerId'=>$this->customerId,
            'status'=>$this->status,
            'bailledDate'=>$this->bailledDate,
            'paidDate'=>$this->paidDate
        ];

    }
}
