<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prasarana extends Model
{
    protected $table = 'prasarana';

    protected $fillable = [
        'user_id',
        'tanggal',
        'semester',
        'balai_desa',
        'kantor_desa',
        'bengkok_sawah',
        'bengkok_kering',
        'bengkok_tambak',
        'bengkok_lain',
        'kas_sawah',
        'kas_kering',
        'kas_tambak',
        'kas_rawa',
        'kas_lain',
        'created_at',
        'updated_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
