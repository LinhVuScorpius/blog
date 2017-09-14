<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ResetPassword extends Model
{
    protected $table = 'password_resets';

    protected $fillable = [
        'email', 'token'
    ];

    public $timestamps = false;
    protected $primaryKey = 'email';
}
