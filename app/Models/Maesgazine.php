<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;

class Maesgazine extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $guarded = [];
}
