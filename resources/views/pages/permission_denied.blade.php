@extends('layouts.app')
@section('title', 'Unauthorized access')

@section('content')
  <div class="col-md-4 offset-md-4">
    <div class="card ">
      <div class="card-body">
        @if (Auth::check())
          <div class="alert alert-danger text-center mb-0">
            The current account has no background access rights.
          </div>
        @else
          <div class="alert alert-danger text-center">
            Please log in before operating
          </div>

          <a class="btn btn-lg btn-primary w-100" href="{{ route('login') }}">
            <i class="fas fa-sign-in-alt"></i>
            Log in
          </a>
        @endif
      </div>
    </div>
  </div>
@stop
