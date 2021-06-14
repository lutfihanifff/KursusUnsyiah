<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $table = 'peserta';
    protected $guarded = [];


    public $incrementing = false;

    /**
     * Method One To One 
     */
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function kursus()
    {
        return $this->hasMany(Kursus::class);
    }

    public function first_kursus()
    {
        return $this->kursus()->mulai()->oldest()->first() ?: $this->kursus()->latest()->first();
    }


    public function status()
    {
        return $this->kursus->count() ? 'Memiliki Kursus' : 'Tidak Memiliki Kursus';  
    }

   
}
