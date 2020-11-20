<?php

namespace Tests\Unit;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase, WithFaker;
    /** @test */
    public function it_has_a_path()
    {
        $posts = Post::factory()->create();
        $this->assertEquals('/posts/' . $posts->id, $posts->path());
    }

    /** @test */
    public function can_get_formatted_date()
    {
        $post = Post::factory()->make(['created_at' => Carbon::parse('2020-12-1 07:30:27')]);

        $this->assertEquals('December 1, 2020', $post->formatted_date);
    }

    /** @test */
    public function can_truncate_long_text()
    {
        $post = Post::factory()->make([
            'body' => 'Aut sint molestias et aut ut voluptate. Qui et excepturi recusandae laudantium ut sed. Sit cumque et numquam ad qui est.'
        ]);

        $this->assertEquals('Aut sint molestias et aut ut voluptate. Qui et excepturi recusandae laudantium ut sed. Sit cumque et ...', $post->truncated_body);
    }
}
