<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomCalendar extends Model
{
    protected $fillable['room_type_id', 'rate', 'day'];

    function roomType()
    {
    	return $this->hasOne('App\RoomType');
    }
}
