<?php

namespace App\Models;

use App\Models\Offers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OffersUser extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }


    public function offers(){
        return $this->belongsTo(Offers::class,'offer_id','id');
    }
}
