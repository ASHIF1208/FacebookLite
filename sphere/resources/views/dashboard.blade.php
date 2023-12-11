
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>
        @foreach($item as $items)
<div class="container mt-3">
    <h2>{{$items->title}}</h2>
    <div class="card" style="width:400px">
        <img class="card-img-top" src="{{asset('storage/file/'.$items->image)}}" alt="{{$items->title}}" style="width:100%" height="280px">
        <div class="card-body">
        <p class="card-text">{{$items->content}}</p>
        <form action="addcommand/{{$items->id}}" method="post">
            @csrf
            <textarea name="comment" id="comm" cols="30" rows="1"></textarea><br>
            
            <input type="submit" value="comment">
            
        </form>
        <a href="delete/{{$items->id}}"><button>delete</button></a>
            <a href="update/{{$items->id}}"><button>Edit</button></a>
    </div>
    <div class="command container" >
            @foreach($comments as $com)
                @if($items->id == $com->connection_id)
                    @foreach($user as $users)
                        @if($com->user_id == $users->id)
                          <a href="findpost/{{$users->id}}">  <span class=>{{$users->name}} =></span></a>
                        @endif
                    @endforeach
                    <span class="ms-3">{{$com->comment}}</span> <br>
                 @endif
            @endforeach
        </div>

        </div>
    @endforeach
    </x-app-layout>
   
</body>
</html>
