<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Depart extends Model
{
    protected $table='departs';

    protected $fillable = [
        'name'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'depart_id', 'id');
    }
}
