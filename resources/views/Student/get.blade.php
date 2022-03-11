@extends('layouts.loggedin')
@section('content')
<h1>get</h1>
<p>name:{{$name}}</p>
<p>Id:{{$id}}</p>
<p>email:{{$email}}</p>

<ol>
    @for($i=0;$i<count($courses);$i++)
        <li>{{$courses[$i]}}</li>
    @endfor
</ol>
<ul>
    @foreach($courses as $c)
        <li>({{$loop->iteration}}) {{$c}}</li>
    @endforeach
</ul>
@endsection
