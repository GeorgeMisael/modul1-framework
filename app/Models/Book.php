<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
        protected $primaryKey = 'id_book';
    protected $fillable = ['code', 'title', 'author', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id_category');
    }
}
