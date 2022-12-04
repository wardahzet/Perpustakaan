<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;
    public $timestamp = false;

    public function book()
    {
        return $this->belongsTo(Book::class,'book_isbn');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_email');
    }
}