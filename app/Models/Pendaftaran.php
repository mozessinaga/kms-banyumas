<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'partner_name',
        'job_target',
        'email',
        'phone',
        'address',
        'photo',
        'ktp',
        'kk',
        'ijazah',
        'sertifikat_vaksin',
    ];
}
