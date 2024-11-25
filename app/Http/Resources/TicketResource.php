<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TicketResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'createdBy' => $this->created_by,
            'category_ids' => $this->categories->pluck('id'),
            'assignedTo' => $this->assigned_to,
            'notes' => NoteResource::collection($this->notes),
            'createdAt' => $this->created_at,
            'updatedAt' => $this->updated_at,
            'title' => $this->title,
            'status' => $this->status,
        ];
    }
}
