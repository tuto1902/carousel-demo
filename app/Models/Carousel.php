<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Carousel extends Model
{
    use HasFactory;

    public function slides(): HasMany
    {
        return $this->hasMany(Slide::class);
    }
}
