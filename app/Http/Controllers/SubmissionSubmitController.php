<?php

namespace App\Http\Controllers;

use App\Contracts\SubmissionActionContract;
use App\Http\Requests\SubmissionSubmitRequest;
use Illuminate\Http\JsonResponse;
use Throwable;

class SubmissionSubmitController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param SubmissionSubmitRequest $request
     * @param SubmissionActionContract $action
     * @return JsonResponse
     */
    public function __invoke(SubmissionSubmitRequest $request, SubmissionActionContract $action): JsonResponse
    {
        try {
            $action->handle($request->validated());
            return response()
                ->json(['message' => 'OK']);
        } catch (Throwable $exception) {
            return response()
                ->json(['message' => $exception->getMessage()], 422);
        }
    }
}
