<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Pengguna extends Authenticatable
{
    protected $fillable = ['username', 'password'];

    public function login($username, $password)
    {
        // Proses login
    }

    public function logout()
    {
        // Proses logout
    }
}
