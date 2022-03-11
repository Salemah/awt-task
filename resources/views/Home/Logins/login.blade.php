@extends('layouts.loggedin')
@section('content')



<body>
<!-- method="post" -->
<form method="POST" action="{{route('register.submit')}}" >
<fieldset>
<legend>Login:</legend>
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname"><br>
 <input type="submit" value="Submit"><br>
</fieldset>
</form>
<a href="/home">Back</a>
<a href="{{route('register')}}">register</a>
</body>
@endsection
