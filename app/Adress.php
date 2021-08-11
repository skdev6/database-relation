<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
    protected $table = "adress"; 
    protected $fillable = ['auser_id', 'state', 'city', 'country'];

    public function user()
    {
        return $this->belongsTo(Adress::class);
    }
}