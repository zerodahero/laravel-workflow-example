<?php

namespace Tests\Feature;

use App\BlogPost;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TransitionEventTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     *
     * A test to check Issue 20
     *
     * @see https://github.com/zerodahero/laravel-workflow/issues/20
     *
     * @coversNothing
     *
     * @return void
     */
    public function testEventTransition()
    {
        $blogPost = factory(BlogPost::class)->create();

        $blogPost->workflow_apply('to_review');

        $serialized = serialize($blogPost);
        dump($serialized);

        $this->assertTrue(true);
    }
}
