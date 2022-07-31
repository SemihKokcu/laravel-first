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
    //gelen giden verilere müdahale edebilriiz.
    public function getNameAttribute($value){
        return ucfirst($value);
    }

    public function setNameAttribute($value){
        $this->attributes['name']=strtolower($value);
    }

}
