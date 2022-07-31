<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    public  function book(){
//       return $this->belongsTo('\App\Models\Book','id','writerId');
        return $this->hasMany('\App\Models\Book','writerId','id');
    }

}
