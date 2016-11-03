@extends('layouts.app')

@section('content')
    @if(Auth::user()->roles_id == '1')
      <h1>Admin Dashboard</h1>
    @else
      <h1>Guest Dashboard</h1>
    @endif
@endsection
