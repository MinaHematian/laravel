<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class domain extends Model
{
    protected $table = 'domain';

    protected $fillable = [
        'url',
        'category_id',
        'value'
    ];
    public function details()
    {
        return $this->morphMany(Detail::class, 'detailable');
    }
}
