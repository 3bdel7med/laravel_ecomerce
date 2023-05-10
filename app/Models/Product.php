<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable=['name','cte_id','image','small_description','description',
    'original_price','selling_price','status','trading','qty','tax','meta_title','meta_descrip','meta_keywords'];
        
    

}
