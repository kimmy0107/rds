<?php

namespace App\Http\Controllers;

use App\Models\bookings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function getBookings(){
        $easy = DB::select('SELECT * FROM bookings AS b
        INNER JOIN personal_information AS pi ON pi.id = b.personal_ID
        INNER JOIN service_types AS st ON st.id = b.service_id
        INNER JOIN reservations_schedule AS rs ON rs.id = b.reservation_ID');

        return response()->json(['success'=> true, 'easy'=>$easy],300);
    }

    public function getBookingData(){
        $moderate=DB::table('bookings as b')
        ->select('*')
        ->join('personal_information AS pi', 'pi.id','b.personal_ID')
        ->join('service_types AS st','st.id','b.service_id')
        ->join('reservations_schedule AS rs', 'rs.id','b.reservation_ID')
        ->get();

        return response()->json(['success'=>true,'moderate'=>$moderate],200);
    }
    public function getBookingsChallenge(){
        $challenging = bookings::with('personal_information','service_types','reservations_schedule')->get();

        return response()->json(['success'=> true, 'challenging'=>$challenging],400);
}
    public function getBookingsDifficult(){
        $difficult =bookings::with(['personal_information'=> function($q){
        $q->select('*');
        }])->with(['personal_information'=> function($q){
        $q->select('*');    
        }])->with(['service_types'=> function($q){
        $q->select('*');    
        }])->with(['reservations_schedule'=> function($q){
        $q->select('*');   
        }])->get();

        return response()->json(['success'=> true, 'difficult'=>$difficult],500);

    }
}