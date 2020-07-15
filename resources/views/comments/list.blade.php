@extends('layouts/app')

@section('content')

<link rel="stylesheet" href="{{asset('css/comun.css')}}">


<div class="container mt-4">

    @foreach ($comments as $comment)
    <div class="comment mt-2">
        <div class="col ">
            <div class="card ">
                <div class="card-header">

                        @foreach ($users as $user)
                            @if ($user->id == $comment->user_id)
                                @if ($user->is_admin == 1)
                                    <span class="badge badge-success"> Admin</span>
                                @endif
                                @if ($user->is_moderator == 1)
                                    <span class="badge badge-warning"> Partner</span>
                                @endif

                           
                            Autor: <b><i>{{$user->name}} </i></b> . <span class="float-right"> {{date('d/m/Y - h:i',strtotime($comment->created_at))}}</span>
                            @endif                            
                        @endforeach                    
                </div>
                <div class="card-body">
                
                <p class="card-text">{{$comment->comment_text}}</p>
                
                </div>
                <div class="card-footer">
                    <div class="float-right"> <a href="" class="mr-2"> Me gusta </a> <span class="badge badge-primary">{{$comment->likes}}</span></div>
                </div>
            </div>
        </div>
    </div>
    
        
    @endforeach

    <div class="agregar_comentario mt-5">

        @if (isset(Auth::user()->id))
            <form action="/comments" method="POST">
            @csrf
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <div class="form-group">
                    
                    <textarea class="form-control"  name="comment_text" id="exampleFormControlTextarea1" rows="3"  placeholder="Deja tu comentario.." required></textarea>
                </div>
                
                <hr>
                <input type="submit" value="Comentar" class="btn btn-primary">
            </form>
        @else
            <form action="/comments" method="POST">
            @csrf
            <div class="form-group">
                    
                <textarea class="form-control"  name="comment_text" id="exampleFormControlTextarea1" rows="3"  placeholder="Debes loguear para comentar" disabled></textarea>
            </div>
                <hr>                
            </form>
            <a href="/login" class="btn btn-primary float-right">Comentar</a>       
        @endif

        
    </div>


</div>
    
@endsection