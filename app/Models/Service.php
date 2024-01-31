<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['title', 'description', 'category_id', 'cost','email'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
