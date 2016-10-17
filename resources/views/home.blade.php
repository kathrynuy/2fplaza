@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                    <ul>
                      <li>Guests</li>
                        <ul>
                          <li>Add New Guests</li>
                          <li>
                            <a href="{{ url('/guests') }}">View Guests</a>
                          </li>
                        </ul>
                      <li>Menu</li>
                        <ul>
                          <li>Add New Menu</li>
                          <li>Weekly Menu</li>
                        </ul>
                      <li></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
