@extends('layouts.loggedin')
@section('content')
    <form method="POST" action="{{ route('register.submit') }}">
        {{ csrf_field() }}
        <fieldset>
            <legend>Register:</legend>
            <label for="name">First name:</label><br>
            <input type="text" id="name" value="{{ old('name') }}" name="name"><br>
            @error('name')
                <span class="text-danger"> {{ $message }}</span><br>
            @enderror
            <label for="email">Email:</label><br>
            <input type="email" id="email" value="{{ old('email') }}" name="email"><br>
            @error('email')
                <span class="text-danger"> {{ $message }}</span><br>
            @enderror
            <label for="password">Password:</label><br>
            <input type="password" id="pass" name="pass"><br>
            @error('pass')
                <span class="text-danger"> {{ $message }}</span><br>
            @enderror
            <label for="Cpassword">Password:</label><br>

            <input type="password" id="cpass" name="cpass"><br>
            @error('cpass')
                <span class="text-danger"> {{ $message }}</span><br>
            @enderror
            <input type="submit" value="Submit"><br>
        </fieldset>
    </form>
    <a href="/home">Back</a>
    <a href="{{ route('login') }}">Login</a>
@endsection
