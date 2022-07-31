<style>
    .password{
        border: 1px solid red;
    }
</style>


{!! Form::open(['url'=>'book/create','method'=>'POST']) !!}
{!! Form::label('name','Kitap İsmi') !!}
{!! Form::text('name','') !!}
{!! Form::password('password',['class'=>'password']) !!}
{!! Form::email('email') !!}
{!! Form::file('file') !!}
{!! Form::checkbox('type','1') !!}
{!! Form::radio('type',1) !!}
{!! Form::number('type','1') !!}
{!! Form::date('date') !!}
{!! Form::select('size',['L'=>'Large','S'=>'small'],null,['placeholder'=>'size seçiniz']) !!}
{!! Form::select('animal',[
    'Cats'=>['leopard'=>'leopard'],
    'Dogs'=>['spaniel'=>'Spaniel']
]); !!}
{!! Form::selectRange('number',10,20) !!}
{!! Form::selectMonth('aylar') !!}
{!! Form::submit('bana tıkla') !!}










{!! Form::close() !!}
