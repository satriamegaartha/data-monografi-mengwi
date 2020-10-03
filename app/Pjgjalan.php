<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pjgjalan extends Model
{
    protected $table = 'pjgjalan';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
