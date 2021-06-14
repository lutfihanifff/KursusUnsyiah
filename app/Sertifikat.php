<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sertifikat extends Model
{
    protected $table = 'sertifikat';
    protected $guarded = [];

    public function kursus()
    {
    	return $this->belongsTo(Kursus::class);
    }

    public function nilai_akhir()
    {
        if ($this->nilai_akhir != null) {
            if($this->nilai_akhir <= 100 && $this->nilai_akhir >= 91){
                return 'A';
            }elseif ($this->nilai_akhir <= 90 && $this->nilai_akhir >= 80) {
                return 'B';
            }elseif ($this->nilai_akhir <= 79 && $this->nilai_akhir >= 70) {
                return 'C';
            }else{
                return 'Kosong';
            }
        }
    }

    public function predikat()
    {
        if ($this->nilai_akhir != null) {
            if($this->nilai_akhir <= 100 && $this->nilai_akhir >= 91){
                return 'SANGAT BAIK';
            }elseif ($this->nilai_akhir <= 90 && $this->nilai_akhir >= 80) {
                return 'BAIK';
            }elseif ($this->nilai_akhir <= 79 && $this->nilai_akhir >= 70) {
                return 'CUKUP';
            }else{
                return 'Kosong';
            }
        }
    }

}
