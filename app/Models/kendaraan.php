<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kendaraan extends Model
{
    protected $table = 'kendaraan';
    protected $fillable = ['noKendaraan', 'nomor', 'ruangParkir', 'bayar', 'status'];
    protected $primaryKey = 'id';

        public function ruang()
        {
            return $this->hasOne('ruang');
        }
}