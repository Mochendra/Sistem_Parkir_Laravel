<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class petugas extends Model
{
    protected $table = 'users';
    protected $fillable = ['nama', 'user_name', 'password', 'role', 'mall'];
    protected $primaryKey = 'id';

}