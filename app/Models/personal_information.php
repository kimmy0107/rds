<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personal_information extends Model
{
    use HasFactory;
    protected $table ='personal_information';
    protected $fillable = ['user_id','first_name','middle_name','last_name','phone','location_address'];

    public function personal_information(){
        return $this->belongsTo(User:: class,'user_id');
    }
 
}
