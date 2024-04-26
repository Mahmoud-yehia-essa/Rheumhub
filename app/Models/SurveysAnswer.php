<?php

namespace App\Models;

use App\Models\SurveysQu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SurveysAnswer extends Model
{
    use HasFactory;


    protected $guarded = [];

    public function surveysQus(){
        return $this->belongsTo(SurveysQu::class,'qu_id','id');
    }


}
