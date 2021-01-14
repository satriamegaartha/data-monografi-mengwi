<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Polkam extends Model
{
    protected $table = 'polkam';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
