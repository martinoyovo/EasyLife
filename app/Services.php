<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $fillable=
    [
        'id',
    	'title',
    	'description',
    	'favourited',
    	'category_id',
    	'prices_id'
	];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function prices()
    {
        return $this->hasMany(Prices::class, 'parent_service');
    }

    public function link()
    {
        return '/services/'.$this->id;
    }
}
