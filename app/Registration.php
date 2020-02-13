<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Registration extends Model
{
    protected $table='registrations';
    public $primarykey='id';
    public $timestamp=true;

    protected $fillable=[
        'name', 'rollno', 'branch', 'gender', 'year', 'email', 'phone', 'hosteller',
    ];
}
