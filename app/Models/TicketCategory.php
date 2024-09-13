<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketCategory extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function tickets()
    {
        return $this->belongsToMany(Ticket::class)->using(TicketHasCategory::class);
    }
}
