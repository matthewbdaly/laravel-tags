<?php

namespace Tests\Unit\Eloquent\Models;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Fixtures\User;
use Matthewbdaly\LaravelTags\Eloquent\Models\Tag;

class TaggableTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test creating a taggable model
     *
     * @return void
     */
    public function testCreateTaggable()
    {
        $user = factory(User::class)->create();
        $tag = factory(Tag::class)->create();
        $user->tags()->attach($tag);
        $this->assertEquals($tag->name, $user->tags->first()->name);
    }
}
