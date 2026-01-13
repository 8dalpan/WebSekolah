<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;
    protected $table='mapels';

    public function mapel(){
        return $this->hasOne(Mapel::class);
    }

}
