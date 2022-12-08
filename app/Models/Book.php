<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

    protected $primaryKey = 'isbn';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'isbn',
        'category_id',
        'title',
        'author',
        'publisher',
        'year',
        'data',
        'cover',
        'synopsis',
    ];

    protected $attributes = [
        'readers' => 0,
        'views' => 0,
    ];

    public function wishlist()
    {
        return $this->hasMany(Wishlist::class,'book_isbn');
    }

    public function rent()
    {
        return $this->hasMany(Rent::class,'book_isbn');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

}
