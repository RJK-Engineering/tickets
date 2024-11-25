<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public $timestamps = false;

    protected $table = 'ticket_categories';

    public function tickets()
    {
        return $this->belongsToMany(Category::class, 'ticket_has_category', 'category_id', 'ticket_id');
    }
}
