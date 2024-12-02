<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class detail extends Model
{
    protected $fillable = ['detail_type', 'detail_id', 'type', 'value'];

    public function detailable()
    {
        return $this->morphTo();
    }
}
