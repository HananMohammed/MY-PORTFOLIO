<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Phone extends Model
{
    use HasFactory;

    protected $fillable = ["phone", "created_by"];

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
