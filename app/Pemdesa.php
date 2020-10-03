<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemdesa extends Model
{
    protected $table = 'pemdesa';

    protected $fillable = [
        'user_id',
        'tanggal',
        'semester',
        'desa',
        'kelurahan',
        'dusun',
        'rw',
        'rt',
        'desa_swadaya',
        'desa_swakarya',
        'desa_swasembada',
        'juara_lomba_kec_1',
        'juara_lomba_kec_2',
        'juara_lomba_kec_3',
        'juara_lomba_kab_1',
        'juara_lomba_kab_2',
        'juara_lomba_kab_3',
        'lkmd_1',
        'lkmd_2',
        'lkmd_3',
        'jumlah_kpd',
        'kpd_aktif',
        'kpd_taktif',
        'pembina_kpd_kec',
        'pembina_kpd_otonom',
        'pembina_kpd_vertikal',
        'created_at',
        'updated_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
