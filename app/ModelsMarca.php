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
}
