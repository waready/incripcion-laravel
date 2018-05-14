<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class mark extends Model
{
    protected $table = 'marks';
    protected $primarykey = 'id';
    public $timestamps= false;

    protected $fillable = [
        'id', 'name'  
    ];
    
    public function product() { 

        return $this->belongsto(Product::class);
        
    }
}

