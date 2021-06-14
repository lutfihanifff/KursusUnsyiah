<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $table = 'nilai';
    protected $guarded = [];

    public $timestamps = false;

    public function kursus()
    {
    	return $this->belongsTo(Kursus::class);
    }

    public function materi()
    {
    	return $this->belongsTo(Materi::class);
    }

    
}
