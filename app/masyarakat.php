<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class masyarakat extends Authenticatable
{
    protected $table = 'masyarakat';
    protected $primaryKey = 'nik';
    protected $fillable = ['nik', 'nama', 'username', 'password', 'telp', 'created_at', 'updated_at'];

    public function username()
    {
        return 'username';
    }
}