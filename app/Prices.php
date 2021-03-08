<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prices extends Model
{
    protected $fillable = ['item', 'parent_service'];

    protected function parent_service()
    {
        return $this->belongsTo(Services::class, 'parent_service', 'title');
    }
    protected function services()
    {
        return $this->belongsTo(Services::class);
    }

}
