<?php

namespace Matthewbdaly\LaravelTags\Eloquent\Traits;

trait Taggable
{
    /**
     * Tags relation
     *
     * @return Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function comments()
    {
        return $this->morphMany('Matthewbdaly\LaravelTags\Eloquent\Models\Tag', 'taggable');
    }

}
