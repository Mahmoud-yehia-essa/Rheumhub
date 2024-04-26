<?php

namespace App\Models;

use App\Models\EventType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;
    protected $guarded = [];



    public function membership(){
        return $this->belongsTo(Membership::class,'membership_id','id');
    }



    public function eventType(){
        return $this->belongsTo(EventType::class,'event_type_id','id');
    }


}
