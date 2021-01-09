<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    use HasFactory; 

    public function category() {

        return $this->belongsTo('App\Models\Category', 'categorie_id');
    }
    public function locates(){

        return $this->belongsTo('App\Models\Locate', 'locate_id');
    }
}
