<?php

namespace App\Models;

use App\Models\OffersCate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Offers extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function OffersType(){
        return $this->belongsTo(OffersCate::class,'offers_type_id','id');
    }


}
