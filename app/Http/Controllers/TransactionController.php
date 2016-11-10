<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Illuminate\Support\Facades\DB;

use App\User;
use App\Transaction;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $users = DB::table('users')->where('roles_id', '2')->get();

      date_default_timezone_set("America/Montreal");
      $date = strtotime(date("Y-m-d"));

      $day = date('d', $date);
      $month = date('m', $date);
      $year = date('Y', $date);
      $firstDay = mktime(0,0,0,$month, 1, $year);
      $title = strftime('%B', $firstDay);

      $dayOfWeek = date('D', $firstDay);
      $daysInMonth = cal_days_in_month(0, $month, $year);

      $timestamp = strtotime('next Sunday');
      $weekDays = [];

      for ($i = 0; $i < 31; $i++){
        $weekDays[] = strftime('%a', $timestamp);
        $timestamp = strtotime('+1 day', $timestamp);
      }

      // $blank = date('w', strtotime("{$year}-{$month}-01"));

      return view('transaction.index', [
        'users' => $users,
        'date' => $date,
        'day' => $day,
        'month' => $month,
        'year' => $year,
        'firstDay' => $firstDay,
        'title' => $title,
        'dayOfWeek' => $dayOfWeek,
        'daysInMonth' => $daysInMonth,
        'timestamp' => $timestamp,
        'weekDays' => $weekDays,
        // 'blank' => $blank
      ]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
