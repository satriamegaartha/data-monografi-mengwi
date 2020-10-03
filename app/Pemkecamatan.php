<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemkecamatan extends Model
{
    protected $table = 'pemkecamatan';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
