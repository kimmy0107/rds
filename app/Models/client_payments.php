<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client_payments extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table ='client_payments';
    protected $fillable = ['booking_id','service_id','personal_ID'];

    public function bookings(){
        return $this->belongsTo(User:: class,'booking_id');
    }
    public function service_types(){
        return $this->belongsTo(User:: class,'service_id');  
    }
    public function personal_information(){
        return $this->belongsTo(User:: class,'personal_ID');
    }

}
