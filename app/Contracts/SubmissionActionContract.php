<?php

namespace App\Contracts;

interface SubmissionActionContract
{
    public function handle(array $data): void;
}
