<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    protected $table = 'periode';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
