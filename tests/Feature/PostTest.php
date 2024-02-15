<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Testing\File;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    /** @test */ // in the TestCase class in the trait CreatesApplication config and cache are cleared
    public function test_uri_slash_redirects_to_uri_posts()
    {
        $response = $this->get('/');

        $response->assertStatus(302);
        $response->assertRedirect('posts');
    }

    public function test_getting_posts_in_main_page()
    {
        $user = User::factory()->create();
        $category = Category::factory()->create();
        $post = Post::factory()->create();

        $res = $this->get('posts');

        $res->assertStatus(200);
        $res->assertViewIs('posts.index');
        $res->assertDontSee('No posts found');
//        $posts = Post::factory(10)->create(['<field_name>' => '0']); // also need to create users and categories before Post factory
//        $titles = $posts->pluck('title')->toArray();
//        $res->assertSeeText($titles);
    }


    public function test_non_admin_cannot_access_admin_panel()
    {
        $user = User::factory()->create();
        $res = $this->actingAs($user)->get('/admin');

        $res->assertStatus(404);
    }

    public function test_admin_can_access_admin_panel()
    {
        $admin = User::factory()->create(['role' => User::ROLE_ADMIN]);

        $res = $this->actingAs($admin)->get('/admin');
        $res->assertStatus(200);
    }

    public function test_admin_can_access_create_post_page()
    {
        $admin = User::factory()->create(['role' => User::ROLE_ADMIN]);

        $res = $this->actingAs($admin)->get('/admin/posts/create');
        $res->assertStatus(200);
        $res->assertSee(['Creating post', 'Add']);
    }

    public function test_create_post_successful()
    {
        $admin = User::factory()->create(['role' => User::ROLE_ADMIN]);
        $category = Category::factory()->create();

        Storage::fake('testDisk');

        $imageFile1 = File::create('preview_image.jpg');
        $imageFile2 = File::create('main_image.jpg');

        $data = [
            'title' => 'TestTitle',
            'content' => 'TestContent',
            'author_id' => $admin->id,
            'category_id' => $category->id,
            'preview_image' => $imageFile1,
            'main_image' => $imageFile2,
        ];

        $res = $this->actingAs($admin)->post('admin/posts', $data);

        $expectedPost = Post::latest()->first();

        $this->assertDatabaseCount('posts', 1);
        $this->assertEquals($data['title'], $expectedPost->title);
        $this->assertEquals($data['content'], $expectedPost->content);

        $res->assertStatus(302);
        $res->assertRedirect('admin/posts');
    }

    public function test_attribute_title_is_required_for_storing_post()
    {
        $admin = User::factory()->create(['role' => User::ROLE_ADMIN]);

        $data = [
            'title' => '',
        ];

        $res = $this->actingAs($admin)->post('admin/posts/', $data);

        $res->assertInvalid('title');
        $res->assertRedirect();
    }

    public function test_update_post_is_successful()
    {
        $admin = User::factory()->create(['role' => User::ROLE_ADMIN]);
        $category = Category::factory()->create();
        $post = Post::factory()->create();

        Storage::fake('testDisk');

        $imageFile1 = File::create('preview_image.jpg');
        $imageFile2 = File::create('main_image.jpg');

        $data = [
            'title' => 'TestPost',
            'content' => '<b>TestContent</b>',
            'author_id' => $admin->id,
            'category_id' => $category->id,
            'preview_image' => $imageFile1,
            'main_image' => $imageFile2,
        ];

        $res = $this->actingAs($admin)->patch('admin/posts/' . $post->id, $data);

        $updatedPost = Post::first();

        $this->assertEquals($data['title'], $updatedPost->title);
        $this->assertEquals($data['content'], $updatedPost->content);
        $this->assertEquals($data['author_id'], $updatedPost->author_id);
        $this->assertEquals($data['category_id'], $updatedPost->category_id);
        $this->assertEquals('images/' . $imageFile1->hashName(), $updatedPost->preview_image);
        $this->assertEquals('images/' . $imageFile2->hashName(), $updatedPost->main_image);

        $res->assertRedirect();
    }

    public function test_delete_post_is_successful()
    {
        $admin = User::factory()->create(['role' => User::ROLE_ADMIN]);
        Category::factory()->create();
        $post = Post::factory()->create();

        $res = $this->actingAs($admin)->delete('admin/posts/' . $post->id);

        $this->assertEquals(0, Post::count());//    $this->assertSoftDeleted('posts', ['id' => $post->id]);

        $res->assertRedirect();
    }


//    private function createUser(bool $isAdmin = false)
//    {
//        $data = [
//            'name' => $this->faker->name(),
//            'email' => $this->faker->unique()->safeEmail(),
//            'email_verified_at' => now(), // need to add in fillable so that this value can be changed here manually
//            'password' => '$2y$10$l9l8aj86CttPv2987/G0teGLA64TrH7cTGepFHQpR6jJbBRDf/WIa', // password: 1
//        ];
//
//        if ($isAdmin) {
//            $data['role'] = User::ROLE_ADMIN;
//        } else{
//            $data['role'] = User::ROLE_READER;
//        }
//
//        return User::create($data);
//    }
//    public function createCategory()
//    {
//        return Category::create(['title' => 'Test Category']);
//    }

//    public function test_getting_posts_in_main_page()
//    {
//        $user = User::factory();
//        $category = Category::create(['title' => 'Test Category']);
//        $data = [
//            'title' => 'TestPost',
//            'content' => '<b>TestContent</b>',
//            'author_id' => $user->id,
//            'category_id' => $category->id,
//        ];
//        $post = Post::create($data);
//
//        $response = $this->get('posts');
//
//        $response->assertStatus(200);
//        $response->assertViewIs('posts.index');
//        $response->assertDontSee('No posts found');
////        $posts = Post::factory(10)->create(['<field_name>' => '0']); // also need to create users and categories before Post factory
////        $titles = $posts->pluck('title')->toArray();
////        $response->assertSeeText($titles);
//    }

}
