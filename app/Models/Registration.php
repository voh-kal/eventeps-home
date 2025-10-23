<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = [
        'fname','lname','email','number','industry','region','event_agency','event_size','additional_info','check',
        'description','event_features','mode_of_event','venue','start_date','start_time','end_time','service_option','payment_option','event_type','other_features','tickets','website','question','attendee_list','reference_id'        
     
    ];

    use HasFactory;
}
