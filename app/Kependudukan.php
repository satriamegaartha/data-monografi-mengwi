<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kependudukan extends Model
{
    protected $table = 'kependudukan';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
