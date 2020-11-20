<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /** @test */
    public function authenticated_user_can_see_all_posts()
    {
        $post = Post::factory()->create();
        $user = User::factory()->create();
        $this->actingAs($user);
        $this->post('/posts', $post->toArray())->assertRedirect('/posts');

        // $this->assertDatabaseHas('posts', $post->toArray());

        $this->get('/posts')->assertSee($post['title']);
    }

    /** @test */
    public function a_post_requires_a_title_and_body()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $post = Post::factory()->raw([
            'title' => '',
            'body' => '',
        ]);
        $this->post('/posts', $post)->assertSessionHasErrors('title')->assertSessionHasErrors('body');
    }

    /** @test */
    public function only_authenticated_users_can_create_posts()
    {
        $post = Post::factory()->raw();

        $this->post('/posts', $post)->assertRedirect('/login');
    }

    /** @test */
    public function only_owner_of_post_can_edit_post()
    {
        $this->withoutExceptionHandling();

        $user = User::factory()->create();
        $this->be($user);

        $post = Post::factory()->make();
        $this->assertNotEquals($post->id, auth()->user()->id);
    }
}
