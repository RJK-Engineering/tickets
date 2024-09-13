<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function notes()
    {
        return $this->hasMany(TicketNote::class);
    }

    public function categories()
    {
        return $this->belongsToMany(TicketCategory::class, 'ticket_has_category', 'ticket_id', 'category_id');
    }
}
