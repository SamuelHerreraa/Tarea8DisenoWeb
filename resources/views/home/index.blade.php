
@extends('layouts.app-master')

@section('content')
<div class="container">
    

    @auth
    <h1>Dashboard</h1>

        <br>
        <p>Welcome {{ auth()->user()->name }}</p>
    @endauth

    @guest
    <br>
        <br>
        <p>To see all content please <a href="/login">Log In</a></p>
    @endguest

</div>
@endsection
