<?php

namespace App\Http\Controllers\admin\publisher;

use App\Helper\mHelper;
use App\Http\Controllers\Controller;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\View\View;

class publisherController extends Controller
{
    public function index(){
        //paginate sayfalamayı otomatik yapmamıza yarar
        $data = Publisher::paginate(10);
        return view('admin.publisher.index',['data'=>$data]);
    }
    public function create(){
        return view('admin.publisher.create');
    }
    public function store(Request $request){

        $all = $request->except('_token');
        $all['selflink'] = mHelper::permalink($all['name']);
        $insert = Publisher::create($all);
        if($insert){
            return redirect()->back()->with('status','Yayın evi başarıyla eklendi');
        }
        else{
            return redirect()->back()->with('status','Yayın evi eklenemedi');
        }
    }
    public function edit($id)
    {
        $c = Publisher::where('id','=',$id)->count();
        if ($c!=0){
            $data = Publisher::where('id','=',$id)->get();
            return view('admin.publisher.edit',['data'=>$data]);
        }
        else{
            return  redirect('/');
        }

    }
    public function update(Request $request)
    {
        $id = $request->route('id');
        $c = Publisher::where('id','=',$id)->count();
        if ($c!=0){
            $all = $request->except('_token');
            $all['selflink'] = mHelper::permalink($all['name']);
            $update = Publisher::where('id','=',$id)->update($all);
            if ($update){
                return redirect()->back()->with('status','Yayın evi düzenlendi');
            }
            else{
                return redirect()->back()->with('status','Yayın evi düzenlenemedi');
            }
        }
        else{
            return  redirect('/');
        }
    }
    public function delete($id)
    {
        $c = Publisher::where('id','=',$id)->count();
        if ($c!=0){
            $delete = Publisher::where('id','=',$id)->delete();
            if ($delete){
                return redirect()->back()->with('status','Silme işlemi başarıyla gerçekleştirildi');
            }
            else{
                return redirect()->back()->with('status','Silme işlemi gerçekleştirilemedi!!!');

            }
        }
        else{
            return redirect('/');
        }
    }


}
