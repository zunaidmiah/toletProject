@extends('layouts.lending_page')
@section('body')
	<link rel="stylesheet" type="text/css" href="{{asset('css/signIn_style.css')}}">
	<!------ Include the above in your HEAD tag ---------->
	<form class="container mt-5 ml-5 mr-5 pt-5 pl-5 pr-5" action="#" method="get">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Sign In</button>
</form>
<form class="container mb-5 mt-2 ml-5 mr-5 pb-5 pl-5 pr-5" action="/signUp" method="get">
	<p style="color: blue;">Don'thave a account ?</p>
	<button type="submit" class="btn btn-primary">Sign Up</button>
</form>
@endsection