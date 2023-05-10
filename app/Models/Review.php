<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model
{
    use HasFactory;
    protected $fillable=['user_id','product_id','review'];
    
    public function users ()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function rating ()
    {
        return $this->belongsTo(Rating::class,'user_id','user_id');
    }

}
