<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'product_infos';

    use HasFactory;

    public function category()
    {
        return $this->belongsTo(category::class);
    }
}
