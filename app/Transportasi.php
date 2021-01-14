<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transportasi extends Model
{
    protected $table = 'transportasi';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
