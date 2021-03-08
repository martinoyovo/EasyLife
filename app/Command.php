<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Command extends Model
{
    protected $fillable =
    [
    	'user_id',
    	'address',
    	'date',
    	'mode_payment',
    	'service',
    	'price'
    ];

    public function user()
    {
    	return $this->hasMany(User::class, 'user_id', 'id');
    }
    public function prix()
    {
    	return $this->belongsTo(Prices::class, 'price', 'id');
    }
    public function service()
    {
    	return $this->belongsTo(Services::class, 'service', 'id');
    }
    public function payment()
    {
    	return $this->belongsTo(ModePayments::class, 'mode_payment', 'id');
    }
}
