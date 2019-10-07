<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendors extends Model
{    
    protected $fillable = [
        'companyName', 
        'contactFName', 
        'contactNName'
    ];
}
