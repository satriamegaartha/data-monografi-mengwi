<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ldaerah extends Model
{
    protected $table = 'luas_daerah';

    protected $fillable = [
        'user_id',
        'tanggal',
        'semester',
        'tanah_sawah',
        'ts_iteknis',
        'ts_isteknis',
        'ts_isederhana',
        'ts_tadah_hujan',
        'ts_sawah',
        'tanah_kering',
        'tk_pekarangan',
        'tk_tegal',
        'tk_ladang',
        'tk_penggembalaan',
        'tanah_basah',
        'tb_tambak',
        'tb_rawa',
        'tb_balong',
        'tb_gambut',
        'tanah_hutan',
        'th_lebat',
        'th_belukar',
        'th_sejenis1',
        'th_sejenis2',
        'th_rawa',
        'tanah_perkebunan',
        'tp_negara',
        'tp_swasta',
        'tanah_umum',
        'tu_lapangan',
        'tu_rekreasi',
        'tu_jalur_hijau',
        'tu_kuburan',
        'tanah_lain_lain',
        'created_at',
        'updated_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
