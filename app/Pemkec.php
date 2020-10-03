<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemkec extends Model
{
    protected $table = 'pemkec';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
