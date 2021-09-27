<?php

namespace Incfile\MyBlog\Tests;

use Incfile\MyBlog\Factories\PostFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Incfile\MyBlog\Post;

class PostsTest extends TestCase
{
    use RefreshDatabase;

    public function test_a_post_can_be_created_with_factory()
    {
        Post::factory()->create();
        $this->assertCount(1, Post::all());
    }
}
