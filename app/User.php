<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role', 'alamat'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function kumum()
    {
        return $this->hasMany(Kumum::class);
    }
    public function ldaerah()
    {
        return $this->hasMany(Ldaerah::class);
    }
    public function pemdesa()
    {
        return $this->hasMany(Pemdesa::class);
    }
    public function prasarana()
    {
        return $this->hasMany(Prasarana::class);
    }
    public function pengangkutan()
    {
        return $this->hasMany(Pengangkutan::class);
    }
    public function pjgjalan()
    {
        return $this->hasMany(Pjgjalan::class);
    }
    public function perekonomian()
    {
        return $this->hasMany(Perekonomian::class);
    }
    public function jumlahusaha()
    {
        return $this->hasMany(Jumlahusaha::class);
    }
    public function saranasosbud()
    {
        return $this->hasMany(Saranasosbud::class);
    }
    public function pemkecamatan()
    {
        return $this->hasMany(Pemkecamatan::class);
    }
    public function kependudukan()
    {
        return $this->hasMany(Kependudukan::class);
    }
    public function keagrariaan()
    {
        return $this->hasMany(Keagrariaan::class);
    }
    public function tanaman()
    {
        return $this->hasMany(Tanaman::class);
    }
}
