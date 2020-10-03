<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanaman extends Model
{
    protected $table = 'tanaman';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
