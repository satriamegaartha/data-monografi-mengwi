<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengangkutan extends Model
{
    protected $table = 'pengangkutan';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
