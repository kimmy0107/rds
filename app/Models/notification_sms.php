<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notification_sms extends Model
{
    use HasFactory;
    protected $table ='notification_sms';
    protected $fillable = ['booking_id','personal_ID','notified_sms'];

    public function bookings(){
        return $this->belongsTo(User:: class,'booking_id');
    }
        public function personal_information(){
            return $this->belongsTo(User:: class,'personal_ID');  
    }
    
}
