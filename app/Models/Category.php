<?php

namespace App\Models;

use App\Models\Cuisine;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function cuisine()
    {
        return $this->belongsTo(Cuisine::class);
    }
}
