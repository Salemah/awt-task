@extends('layouts.loggedin')
@section('content')



<body>

<!-- method="post" -->
<form method="POST" action="{{route('students.editSubmit')}}" >
    {{csrf_field()}}

    <label for="id">Id:</label><br>
    <input type="text" value="{{$students->id}}" id="id" name="id"><br>
  <label for="name">Name:</label><br>
  <input type="text" value="{{$students->name}}" id="name" name="name"><br>
  <label for="email">Email:</label><br>
  <input type="email" value="{{$students->email}}" id="email" name="email"><br>
 <input type="submit" value="Submit"><br>

</form>

</body>
@endsection
