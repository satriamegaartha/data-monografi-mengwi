<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perikanan extends Model
{
    protected $table = 'perikanan';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
