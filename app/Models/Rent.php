<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    use HasFactory;
    
    public function books()
    {
        return $this->belongsTo(Book::class,'book_isbn','isbn');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_email','email');
    }
}
