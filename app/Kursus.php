<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kursus extends Model
{
    protected $table = 'kursus';
    protected $guarded = [];


    /**
     * Method One To One 
     */
    public function peserta()
    {
    	return $this->belongsTo(Peserta::class);
    }

    public function instruktur()
    {
    	return $this->belongsTo(Instruktur::class);
    }

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function absensi()
    {
        return $this->hasMany(Absensi::class);
    }

    public function sertifikat()
    {
        return $this->hasOne(Sertifikat::class);
    }

    public function hadir()
    {
        return $this->absensi()->hadir()->count();
    }

    public function izin()
    {
        return $this->absensi()->izin()->count();
    }

    public function tidakhadir()
    {
        return $this->absensi()->tidak()->count();
    }

    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }

    public function scopeMulai($query)
    {
        return $query->where('status', 'mulai');
    }     

    public function scopeSelesai($query)
    {
        return $query->where('status', 'selesai');
    }

    public function nilai_teori()
    {
        return $this->nilai_teori == null ? 'Nilai Belum Ada' : $this->nilai_teori;
    }

    public function nilai_praktik()
    {
        return round($this->nilai->avg('nilai'));
    }

    public function nilai_absensi()
    {
        // $hadir = $this->hadir() + $this->izin();
        // $lama  = $hadir + $this->tidakhadir();

        $hadir = $this->hadir();
        $lama = $this->program->lama;

        return round($hadir / $lama * 100);

    }

    public function nilat_predikat()
    {
        if ($this->nilai_teori != null) {
            if($this->nilai_teori <= 100 && $this->nilai_teori >= 91){
                return 'A';
            }elseif ($this->nilai_teori <= 90 && $this->nilai_teori >= 80) {
                return 'B';
            }elseif ($this->nilai_teori <= 79 && $this->nilai_teori >= 70) {
                return 'C';
            }elseif ($this->nilai_teori < 70) {
                return 'D';
            }
        }
    }

    public function nilai_predikat()
    {
        if ($this->nilai_praktik() != null) {
            if($this->nilai_praktik() <= 100 && $this->nilai_praktik() >= 91){
                return 'A';
            }elseif ($this->nilai_praktik() <= 90 && $this->nilai_praktik() >= 80) {
                return 'B';
            }elseif ($this->nilai_praktik() <= 79 && $this->nilai_praktik() >= 70) {
                return 'C';
            }elseif ($this->nilai_praktik() < 70) {
                return 'D';
            }
        }
    }


}
