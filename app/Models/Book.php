<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected  $changes = "books";
    protected  $guarded = [];
    public  $timestamps = false;
}
