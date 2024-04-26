<?php

namespace App\Models;

use App\Models\Physiotherapy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PhysiotherapyVideo extends Model
{
    use HasFactory;


    protected $guarded = [];

    public function physiotherapies(){
        return $this->belongsTo(Physiotherapy::class,'physiotherapy','id');
    }

}
