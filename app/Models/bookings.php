<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookings extends Model
{
    use HasFactory;
    protected $table ='bookings';
    protected $fillable = ['personal_ID','service_id','reservation_ID','email','time_slot','status'];

    public function personal_information(){
        return $this->belongsTo(User:: class,'personal_ID');
    }
        public function service_types(){
            return $this->belongsTo(User:: class,'service_id');  
    }
    public function reservations_schedule(){
        return $this->belongsTo(User:: class,'reservation_ID');
    }

}
