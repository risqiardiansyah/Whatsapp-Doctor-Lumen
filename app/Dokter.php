<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
	protected $primaryKey = 'id';
    protected $table = 'dokter';
    public $timestamps = false;
    protected $fillable = [
        'nama_dokter', 'nomor_dokter', 'mulai','hari'
    ];
}
