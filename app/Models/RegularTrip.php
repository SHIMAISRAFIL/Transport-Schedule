<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegularTrip extends Model
{
    use HasFactory;
    protected $guarded=[];
    
    

    public function locationFrom()
    {

    return $this->belongsto(Location::class,'locationfrom','id');
    }

    public function locationTo()
    {

    return $this->belongsto(Location::class,'locationto','id');
    }
    public function transport()
    {

    return $this->belongsto(Transport::class);
    }

}
