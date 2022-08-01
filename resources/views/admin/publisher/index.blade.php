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
                            <h4 class="title">Yayın Evleri</h4>
                            <p class="category">Yayın Evleri Listesi</p>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                <tr><th>Yayın Evleri</th>
                                    <th></th>
                                    <th></th>
                                </tr></thead>
                                <tbody>
                                @foreach($data as $key =>$value)
                                <tr>
                                    <td>{{$value['name']}}</td>
                                    <td><a href="{{route('admin.publisher.edit',['id'=>$value['id']])}}">Düzenle</a></td>
                                    <td><a href="{{route('admin.publisher.delete',['id'=>$value['id']])}}">Sil</a></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$data->links()}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endsection
