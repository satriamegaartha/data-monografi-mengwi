<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pangan extends Model
{
    protected $table = 'pangan';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
