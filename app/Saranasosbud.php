<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saranasosbud extends Model
{
    protected $table = 'saranasosbud';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
