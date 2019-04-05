<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'nameCompany',
        'nameContact',
        'titleContact',
        'address',
        'city',
        'region',
        'zipCode',
        'country',
        'phone',
        'fax'
        ];

}
