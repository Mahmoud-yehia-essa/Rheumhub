<?php

namespace App\Models;

use App\Models\volunteer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VolunteerUser extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }


    public function volunteer(){
        return $this->belongsTo(volunteer::class,'volunteer_id','id');
    }

}
