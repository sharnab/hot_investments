<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    protected $table = 'agencies';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "name",
        "short_name",
        "code",
        "email",
        "mobile",
        "address",
        "contact_person",
        "logo",
        "iata",
        "active_status",
        "remarks",
        "created_by",
        "updated_by"
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
