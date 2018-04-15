<?php

namespace Tests\Unit\Eloquent\Models;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Matthewbdaly\LaravelTags\Eloquent\Models\Tag;
use Tests\Fixtures\User;

class TagTest extends TestCase
{
    /**
     * Test creating a tag
     *
     * @return void
     */
    public function testCreateTag()
    {
        $user = factory(User::class)->create();
        $obj = new Tag;
        $obj->name = 'My Tag';
        $obj->taggable_id = $user->id;
        $obj->taggable_type = get_class($user);
        $obj->save();
        $tag = Tag::first();
        $this->assertEquals($tag->name, 'My Tag');
        $this->assertEquals($tag->taggable_id, $user->id);
        $this->assertEquals($tag->taggable_type, get_class($user));
        $this->assertNotNull($tag->id);
        $this->assertNotNull($tag->created_at);
        $this->assertNotNull($tag->updated_at);
    }
}
