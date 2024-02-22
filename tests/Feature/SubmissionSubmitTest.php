<?php

namespace Tests\Feature;

use App\Jobs\SaveSubmissionJob;
use Illuminate\Support\Facades\Bus;
use Tests\TestCase;

class SubmissionSubmitTest extends TestCase
{
    public function testUserCanSubmitSubmission(): void
    {
        Bus::fake();

        $response = $this->postJson('/api/submit', [
                'name' => 'John',
                'email' => 'john@example.com',
                'message' => 'Test message']
        );

        $response->assertStatus(200);

        Bus::assertDispatched(SaveSubmissionJob::class);
    }
}
