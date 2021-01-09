<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Ad extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
            'title',
            'description',
            'price',
            //'locate',
            'user_id',
            'categorie_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }



}