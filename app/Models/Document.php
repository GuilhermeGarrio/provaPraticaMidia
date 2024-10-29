<?php

namespace App\Models;

use App\Models\User;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Document extends Model
{    

    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'user_id',
        'title',                                            
        'product_brand',               
        'product_model',               
        'product_serial_number',       
        'product_processor',           
        'product_memory',              
        'product_disk',                
        'date',                        
        'product_price',               
        'product_price_string',        
    ];
}
