<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $primarykey = 'id';
    public $timestamps= false;

    protected $fillable = [
        'id', 'name','lastname','cellnumber','email','nivel','price', 'marks_id' 
    ];
     public function mark (){

       //return $his->hasmany(Mark::class);
    }
    public function scopeName($query, $name)
    { 
        if($name !="")
        {   
            $query-> where('lastname', $name);
        }
    }
}
