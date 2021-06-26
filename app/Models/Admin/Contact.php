<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use SoftDeletes, HasFactory;

    CONST INBOUND_EMAIL = 0 ;
    CONST OUTBOUND_EMAIL = 1 ;
    CONST NOT_READ_ACTION = 0 ;
    CONST READ_ACTION = 1 ;

    protected $fillable = ["username","message","email","subject", "actions"];
}
