<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rent extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'user_email',
        'book_isbn',
        'rent_date',
        'due_date',
    ];

    protected $attributes = [
        'status' => true
    ];
    
    public function books()
    {
        return $this->belongsTo(Book::class,'book_isbn','isbn');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_email','email');
    }
}
