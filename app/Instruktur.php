<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instruktur extends Model
{
    protected $table = 'instruktur';
    protected $guarded = [];

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

   	
}
