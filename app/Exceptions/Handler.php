<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $exception)
    {
        if ($exception instanceof SomeSpecificException) {
            // Handle specific exceptions
            return response()->view('error', ['errorMessage' => $exception->getMessage()]);
        }

        if ($this->isHttpException($exception)) {
            return response()->view('error', [], $exception->getStatusCode());
        }

        if (app()->environment('production')) { // Only in production environment
            return response()->view('errors', ['exception' => $exception], 500);
        }

        return parent::render($request, $exception);
    }
}
