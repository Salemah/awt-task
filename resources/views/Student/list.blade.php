@extends('layouts.loggedin')
@section('content')


<h1>List</h1>
<table border="1">
    <tr>
        <th>Name</th>
        <th>Id</th>
        <th>Email</th>
        <th>Reg Date</th>

    </tr>
    @foreach($students as $s)
        <tr>
            <td><a href="{{route('students.details',['id'=>$s->id+900,'name'=>$s->name,'email'=>$s->email])}}">{{$s->name}}</a></td>
            <td>{{$s->id}}</td>
            <td>{{$s->email}}</td>
            <td>{{$s->created_at}}</td>
            <td> <a href="{{route('students.edit',['id'=>encrypt($s->id)])}}"><button class="btn btn-primary"> edit</button></td>
        </tr>
    @endforeach
</table>
@endsection
