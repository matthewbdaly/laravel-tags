<?php

namespace Matthewbdaly\LaravelTags\Eloquent\Traits;

trait Taggable
{
    /**
     * Tags relation
     *
     * @return Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function tags()
    {
        return $this->morphToMany('Matthewbdaly\LaravelTags\Eloquent\Models\Tag', 'taggable');
    }
}
