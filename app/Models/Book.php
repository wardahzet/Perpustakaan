<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $primaryKey = 'isbn';
    protected $keyType = 'string';
    public $incrementing = false;

    public function books()
    {
        return $this->hasMany(Wishlist::class,'book_isbn');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

}
