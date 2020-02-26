<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded=[];

    public function calculate($value){
        return $this->amount - $value;
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
