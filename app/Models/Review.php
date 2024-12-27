<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    /** @use HasFactory<\Database\Factories\ReviewFactory> */
    use HasFactory;

    protected $fillable = ['jet_id', 'reviewer_name', 'text', 'rating', 'status'];

    public function jet()
    {
        return $this->belongsTo(Jet::class);
    }
}
