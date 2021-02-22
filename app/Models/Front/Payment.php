<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        "firstName" ,
        "lastName",
        "email",
        "phone",
        "amount",
        "address",
        "country",
        "state",
        "zip",
        "payment-method",
        "product",
        "save-info",
        "same-address",
        "created_by"
    ];
}
