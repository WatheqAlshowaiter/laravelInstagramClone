<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = [];
    /**
     * get the user from the profile using one-to-one relationship
     *
     * @return \App\Models\User
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function profileImage()
    {
        $imagePath =  ($this->image) ?  $this->image : 'profile/5pjdu2HAuasD4fkfH3T1OkoI5DE1ri92psdN1XJH.webp';
        return '/storage/' . $imagePath;
    }

    public function followers (){
        return $this->belongsToMany(User::class);
    }
}
