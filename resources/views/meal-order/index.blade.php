@extends('layouts.app')
  @section('content')
  <div class="row">
    <div class="col-md-12">
      <h1>Meal Orders</h1>
    </div>
  </div>

  <div class="container">
    <ul class="pagerbutton">
  <li><a href="#">Previous</a></li>
  <li><a href="#">Next</a></li>
  </ul>
  </div>

  <div class="row" id="calendar">
  $month = date('m', $date);
  @for ($month; $month<=12; $month++) {

    $month = strftime('%B', $firstDay);
    {{ $month }}
  }
  @endfor


    <table class='table table-bordered' style="width: 100%;">
      <thead>
        <tr style="background: #d9edf7;">
          <th colspan="36" class="text-center" id= {{ $title }}{{ $year }}> {{ $title }} {{ $year }}</th>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

            @foreach($weekDays as $key => $weekDay)
              <td class="text-center">{{ $weekDay }}</td>
            @endforeach
        </tr>

        <tr>
          <td class="tbl_th">No.</td>
          <td class="tbl_th">First Name</td>
          <td class="tbl_th">Last Name</td>
          <td class="tbl_th">Room No.</td>

          {{-- Days in a month loop--}}
          @for($i = 1; $i <= $daysInMonth; $i++)
            @if($day == $i)
              <td id= {{ $i }}> <strong>{{ $i }}</strong> </td>
            @else
              <td id= {{ $i }}> {{ $i }} </td>
            @endif

      {{--  @if(($i + $blank) % 7 == 0)
      				</tr><tr>
      			@endif --}}
          @endfor

    {{-- @for($i = 0; ($i + $blank + $daysInMonth) % 7 != 0; $i++)
      			<td></td>
      		@endfor --}}

        </tr>
        </thead>
        <tbody>


          <?php $no=1; ?>
          @foreach($users as $user)
            <tr>
              <td id="no">{{$no++}}</td>
              <td id="fname">{{$user->firstname}}</td>
              <td id="lname">{{$user->lastname}}</td>
              <td id="roomnum">{{$user->roomNum}}</td>

              {{-- Days in a month loop--}}
              @for($i = 1; $i <= $daysInMonth; $i++)
                @if($day == $i)
                  <td id= {{ $i }} class="order_td">
                    <span class="glyphicon glyphicon-ok yes"></span>
                    <span class="glyphicon glyphicon-remove no"></span>
                  </td>
                @else
                  <td id= {{ $i }} class="order_td">
                    <span class="glyphicon glyphicon-ok yes"></span>
                    <span class="glyphicon glyphicon-remove no"></span>
                  </td>
                @endif
              @endfor

            </tr>
          @endforeach

      </tbody>
    </table>
  </div>
@stop
