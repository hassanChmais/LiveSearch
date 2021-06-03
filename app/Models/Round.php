<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Round extends Model
{
    use HasFactory;
    public function games(){
    	return $this->hasmany('App\Models\Game')/*->select(['id', 'name','round_id'])*/;
    }
}
