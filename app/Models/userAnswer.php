<?php

namespace App\Models;

use App\Models\User;
use App\Models\SurveysAnswer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class userAnswer extends Model
{
    protected $guarded = [];

    use HasFactory;

    public function users(){
        return $this->belongsTo(User::class,'user_id','id');
    }


    public function qustions(){
        return $this->belongsTo(SurveysAnswer::class,'answer_id','id');
    }

    
}
