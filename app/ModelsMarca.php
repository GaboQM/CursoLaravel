<?php

namespace Market;

use Illuminate\Database\Eloquent\Model;

class ModelsMarca extends Model
{
    //
    protected $table='marks';
    protected $primarykey='id';
    protected $fillable=[
    	'id','nombre'
    	];
    public function product(){
    	//pertence
    	return $this->belongsto(ModelsProduct::class);
    }
}
