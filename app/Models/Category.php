<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'id_category';
    protected $fillable = ['name_category'];

    public function books()
    {
        return $this->hasMany(Book::class, 'category_id', 'id_category');
    }
}
