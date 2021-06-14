<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $table = 'absensi';
    protected $guarded = [];

    public $timestamps = false;

    public function kursus()
    {
        return $this->belongsTo(Kursus::class);
    }

    public function scopeHadir($query)
    {
        return $query->where('status', 'hadir');
    }

    public function scopeIzin($query)
    {
        return $query->where('status', 'izin');
    }

    public function scopeTidak($query)
    {
        return $query->where('status', 'tidak');
    }

}
