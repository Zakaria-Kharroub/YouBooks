<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Reservation extends Model
{
    use HasFactory;


    protected $fillable = [
        'book_id',
        'user_id',
        'date_debut',
        'date_fin',
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
        
}
