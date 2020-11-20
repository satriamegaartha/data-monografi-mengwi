<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kumum extends Model
{
    protected $table = 'kumum';

    protected $fillable = ['tanggal', 'user_id', 'periode_id', 'semester', 'tinggi_pusat', 'suhu_max_min', 'jpp_desa', 'jpp_kabupaten', 'jpp_propinsi', 'ch_jumlah_hari', 'ch_banyaknya', 'bw_datar_berombak', 'bw_berombak_berbukit', 'bw_berbukit_bergunung', 'created_at', 'updated_at'];
    // protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
