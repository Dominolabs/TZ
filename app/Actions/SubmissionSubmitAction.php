<?php

namespace App\Actions;

use App\Contracts\SubmissionActionContract;
use App\Jobs\SaveSubmissionJob;

class SubmissionSubmitAction implements SubmissionActionContract
{
    public function handle(array $data): void
    {
        SaveSubmissionJob::dispatch($data);
    }
}
