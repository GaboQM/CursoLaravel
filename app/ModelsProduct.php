<?php

namespace Market;

use Illuminate\Database\Eloquent\Model;

class ModelsProduct extends Model
{
    //
    protected $table='productos';
    protected $primarykey='id';

    protected $fillable=[
    	'id','name', 'price', 'marks_id'
    ];

    
}
