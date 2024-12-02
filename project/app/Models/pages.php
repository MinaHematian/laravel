<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pages extends Model
{
    protected $table = 'pages';

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
