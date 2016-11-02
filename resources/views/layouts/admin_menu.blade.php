@extends('layouts.app')
  @section('sidebar')
      <ul class="admin_ul">
        <li class="admin_ul"><span class="glyphicon glyphicon-user icns" ></span><a href="{{ url('/admin') }}">Guests</a></li>
        <li class="admin_ul"><span class="glyphicon glyphicon-list-alt icns"></span><a href="{{ url('/menu') }}">Menu</a></li>
        <li class="admin_ul"><span class="glyphicon glyphicon glyphicon-tasks icns"></span><a href="{{ url('/meal-order') }}">Meal Orders</a></li>
      </ul>

  @endsection
