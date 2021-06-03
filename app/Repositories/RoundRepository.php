<?php
 
 namespace App\Repositories;
 use App\Models\Round;
 use Carbon\Carbon;
 use paginate;

 class RoundRepository

 {

CONST CACHE_KEY = 'ROUNDS' ;

 	public function all($orderby){
$key = "all.{$orderby}";
$cacheKey =$this->getCacheKey($key);


return cache()->remember($cacheKey,Carbon::now()->addMinutes(5),function() use($orderby){
return  Round::orderBy($orderby,'ASC')->get();

});

 	}

/* 	public function get($id){
$key = "all.{$id}";
$cacheKey =$this->getCacheKey($key);

return cache()->remember($cacheKey,Carbon::now()->addMinutes(5),function() use($id){
return  Round::findById($id);

});

 	}*/




 	public function getCacheKey($key){
 		$key=strtoupper($key);
 		return self::CACHE_KEY.".$key" ;

 	}
 }