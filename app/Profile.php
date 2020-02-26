<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded =[];

    public function profileImage()
    {
        $imagePath=($this->image) ? $this->image: 'profile/4PIdFlRRh8Ts6GKiWKTMKPQxm4q37Xo1j6nmCbMu.jpeg';
        return '/storage/' . $imagePath;

    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
