@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>
                    <h1>Edição da Comentário</h1>
                    <div class="panel-body">

                        <div class="row">
                            <form action="/comment/{{$comment->id}}/update" method="post">
                                {{method_field("PATCH")}}
                                {{csrf_field()}}
                                <textarea name="text">{{$comment->text}}</textarea>
                                <button name="send" class="btn btn-primary">Editar</button>
                                <a href="{{URL::previous()}}">Cancelar</a>
                            </form>
                        </div>
                        @if(!empty($errors))
                            <div class="row">
                                <ul class="list-group">
                                    @foreach($errors->all() as $error)
                                        <li class="list-group-item">{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
