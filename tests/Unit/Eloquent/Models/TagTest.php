<?php

namespace Tests\Unit\Eloquent\Models;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Matthewbdaly\LaravelTags\Eloquent\Models\Tag;

class TagTest extends TestCase
{
    /**
     * Test creating a tag
     *
     * @return void
     */
    public function testCreateTag()
    {
        $obj = new Tag;
        $obj->name = 'My Tag';
        $obj->save();
        $tag = Tag::first();
        $this->assertEquals($tag->name, 'My Tag');
        $this->assertNotNull($tag->id);
        $this->assertNotNull($tag->created_at);
        $this->assertNotNull($tag->updated_at);
    }
}
