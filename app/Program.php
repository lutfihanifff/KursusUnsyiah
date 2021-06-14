<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table = 'program';
    protected $guarded = [];

    public $timestamps = false;

    public function materi()
    {
    	return $this->hasMany(Materi::class);
    }
}
