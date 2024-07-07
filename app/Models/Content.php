<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    // ...

    public static function getAll()
    {
        return static::query()->get();
    }

    // ...
}
