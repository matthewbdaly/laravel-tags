<?php

namespace Matthewbdaly\LaravelTags\Eloquent\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';

    protected $fillable = [
        'name',
    ];
}
