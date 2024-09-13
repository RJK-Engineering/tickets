<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketNote extends Model
{
    use HasFactory;

    protected $fillable = ['note', 'ticket_id'];

    public $timestamps = false;

    /**
     * All of the relationships to be touched.
     *
     * @var array
     */
    protected $touches = ['ticket'];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
}
