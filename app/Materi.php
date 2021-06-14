<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    protected $table = 'materi';
    protected $guarded = [];

    public $timestamps = false;

    public function program()
    {
    	return $this->belongsTo(Program::class);
    }

    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }
}
