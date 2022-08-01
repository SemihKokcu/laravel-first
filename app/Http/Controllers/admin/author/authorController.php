<?php

namespace App\Http\Controllers\admin\author;

use App\Http\Controllers\Controller;
use App\Models\Authors;
use Illuminate\Http\Request;

class authorController extends Controller
{
    public function index(){
        $data = Authors::paginate(10);
        return view('admin.author.index',['data'=>$data]);
    }
    public function create(){
        return view('admin.author.create');
    }

}
