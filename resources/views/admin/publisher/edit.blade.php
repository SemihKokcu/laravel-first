@extends('layouts.admin')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    @if(session('status'))
                        <div class="alert alert-primary">
                            {{session('status')}}
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Yayın Evi Düzenle</h4>
                            <p class="category">{{$data[0]['name']}}</p>
                        </div>
                        <div class="card-content">
                            <form method="POST" action="{{route('admin.publisher.edit.post',['id'=>$data[0]['id']])}}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">
                                            <label class="label">Yayın evi adı</label>
                                            <input value="{{$data[0]['name']}}" name="name" type="text" class="form-control">
                                            <span class="material-input"></span></div>
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Değiştir</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
