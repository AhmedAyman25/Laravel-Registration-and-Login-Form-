@extends('Layout.app')
@section('title','Login')
@section('content')
<div class="px-4 pt-5 my-5 text-center border-bottom">
    <h1 class="display-4 fw-bold">Login to Your Account</h1>
  </div>
<form class="m-5" method="POST" action="{{route('LoginUser')}}">
    @csrf
    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" name="password">
    </div>

    <div class="d-grid gap-2 col-6 mx-auto">
        <button type="submit" class="btn btn-primary btn-lg">Login</button>
      </div>
  </form>
  @endsection