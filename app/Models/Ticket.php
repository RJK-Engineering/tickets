<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'created_by',
        'assigned_to',
        'created_at',
        'updated_at',
        'title',
        'status',
    ];

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function assignedTo()
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'ticket_has_category', 'ticket_id', 'category_id');
    }
}
