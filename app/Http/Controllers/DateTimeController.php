<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class DateTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     //Task 1
    public function task1($start, $end)
    {
        $start = Carbon::parse($start); // First DateTime 
        $end = Carbon::parse($end); // Second DateTime

        $answer = $start->diffInDays($end); // Calculate the difference in days

        return response()->json($answer); 

    }


    // Task 2
    public function task2($start, $end)
    {
        
        $start = Carbon::parse($start); // First DateTime
        $end = Carbon::parse($end); // Second DateTime

        $answer = $start->diffInWeeks($end); // Calculate the difference in weeks

        return response()->json($answer);
    }


    // Task 3
    public function task3($regionFrom, $cityFrom, $time,)
    {
        $time = Carbon::parse($time)->createFromFormat('H:i:s', $time, $region.'/'.$city); // Parse to Carbon object and format it as needed by the function
        $time = $time->setTimezone('Australia/Sydney')->toTimeString();  // Change the time to the australian AEST

        return response()->json($time);
    }

    
}
