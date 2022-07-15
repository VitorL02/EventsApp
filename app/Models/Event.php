<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    //Por meio do cast e possivel informar que items e do tipo array e não uma string de fato
    protected $casts =[
        'items' =>'array'
    ];

    protected $dates =['date'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
