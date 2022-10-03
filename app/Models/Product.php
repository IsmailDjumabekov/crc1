<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Category;

class Product extends Model
{
    protected $fillable = ['title', 'price', 'category_id','image'];
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

}
