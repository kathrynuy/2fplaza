@extends('layouts.app')
  @section('content')
  <div class="row">
    <div class="col-md-12">
      <h1>Guests</h1>
    </div>
  </div>
  <div class="row">
    <table class="table table-striped">
      <tr>
        <th>No.</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Password</th>
        <th>Actions</th>
      </tr>
      <a href="{{route('admin.create')}}" class="btn btn-info pull-right">Create New Data</a><br><br>
      <?php $no=1; ?>
      @foreach($users as $user)
        <tr>
          <td>{{$no++}}</td>
          <td>{{$user->firstname}}</td>
          <td>{{$user->lastname}}</td>
          <td>{{$user->email}}</td>
          <td>

          </td>
        </tr>
      @endforeach
    </table>
  </div>
  @stop
