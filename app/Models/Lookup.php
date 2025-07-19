<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lookup extends Model
{
    public $timestamps = false;

    const ROLE_EMPLOYEE = 10;
    const ROLE_ADMIN = 11;
    const ROLE_HR = 12;
}
