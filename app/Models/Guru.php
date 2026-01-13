<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $fillable = [
        'nip',
        'nama',
        'jenis_kelamin',
        'mata_pelajaran',
        'no_hp',
        'alamat',
        'status_kepegawaian'
    ];
    protected $table = 'guru';
}
