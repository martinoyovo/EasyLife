<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title', 'color', 'image'];

    public function services()
    {
        return $this->hasMany(Services::class, 'category_id');
    }
}
