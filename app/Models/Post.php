<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'caption', 'thumbnail', 'user_id', 'text',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function getCreatedAtAttribute($value){
        return  date('d/m/Y H:i:s',strtotime($value));
        
    }

}
