<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class THotelDestino extends Model
{
    public function hotel()
    {
        return $this->belongsTo(THotel::class, 'idhotel');
    }

    public function destinos()
    {
        return $this->belongsTo(TDestino::class, 'iddestinos');
    }
}
