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
        <th>Email</th>
        <th>Room No.</th>
        <th>Check In</th>
        <th>Check Out</th>
        <th>Actions</th>
      </tr>
      <a href="{{route('admin.create')}}" class="btn btn-primary pull-right">Add New Guest</a><br><br>
      <?php $no=1; ?>
      @foreach($users as $user)
        <tr>
          <td>{{$no++}}</td>
          <td>{{$user->firstname}}</td>
          <td>{{$user->lastname}}</td>
          <td>{{$user->email}}</td>
          
          <td>{{$user->roomNum}}</td>
        @if ($user->checkIn === null)
          <td></td>
          <td></td>
        @else
          <td>{{ date('F d, Y', strtotime($user->checkIn)) }}</td>
          <td>{{ date('F d, Y', strtotime($user->checkOut)) }}</td>
        @endif

          <td>
            <form class="" action="{{route('admin.destroy',$user->id)}}" method="post">
              <input type="hidden" name="_method" value="delete">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <a href="{{route('admin.edit',$user->id)}}" class="btn btn-info">Update</a>
            </form>
          </td>
        </tr>
      @endforeach
    </table>

  </div>
@stop
