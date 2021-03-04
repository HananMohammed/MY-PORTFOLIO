<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;

    protected $fillable = ["email","receive_contacts","created_by"];

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
