<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Adress extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = ['address', 'created_by'];

    public $translatable = ['address'];

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

}
