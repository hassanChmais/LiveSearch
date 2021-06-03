<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Eloquent;

class Game extends Model
{
    use HasFactory;
            public function round(){
        return $this->belongsTo('App\Models\Round');
    }
        public function teams(){
    	return $this->hasmany('App\Models\Team')/*->select(['id', 'name','round_id'])*/;
    }
}
