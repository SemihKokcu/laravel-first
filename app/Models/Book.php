<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected  $table = "books";
    protected  $guarded = [];
    public  $timestamps = false;

    public function writer(){
        return $this->hasOne('App\Models\Writer','id','writerId');
    }
}
