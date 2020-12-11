<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Passport extends Model
{
    protected $table = "passports";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "passenger_id",
        "passport_no",
        "passport_image",
        "issuing_authority",
        "issuing_date",
        "expiry_date",
        "active_status",
        "created_by",
        "updated_by",
    ];

    public function country()
    {
        return $this->belongsTo('App\Model\Country', 'country_id')->select('id','name');
    }

    public function passenger()
    {
        return $this->belongsTo('App\Model\Passenger', 'passenger_id')->select('id','given_name', 'contact_no');
    }

}
