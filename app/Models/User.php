<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable;


    public function existOneUserAdmin()
    {
        return $this->count() > 0;
    }

    public function rol()
    {
        return $this->belongsTo(Rol::class,'rol_id');
    }

    public function isUserAdmin()
    {
        return $this->rol->rol == 'admin';
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }

    public function findBy($attr,$value)
    {
        return $this->where($attr,$value);
    }

}
