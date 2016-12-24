<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
	protected $fillable = ['body'];
	
    public function employer()
    {
    	return $this->belongsTo(Employer::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
