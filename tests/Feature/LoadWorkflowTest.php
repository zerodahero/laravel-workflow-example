<?php

namespace Tests\Feature;

use App\BlogPost;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoadWorkflowTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     *
     * A test to check Issue 21
     *
     * @see https://github.com/zerodahero/laravel-workflow/issues/21
     *
     * @coversNothing
     *
     * @return void
     */
    public function testLoadsWorkflow()
    {
        // TODO
    }
}
