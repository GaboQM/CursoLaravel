<?php

namespace Market;

use Illuminate\Database\Eloquent\Model;

class ModelsProduct extends Model
{
    //
    protected $table='products';
    protected $primarykey='id';

    protected $fillable=[
    	'id','name', 'price', 'marks_id'
    ];

    public function mark(){
    	//hasmany-tiene muchas
    	 return $this->hasmany(ModelsMark::class);
    }
}
