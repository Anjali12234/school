<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler 
{
     // .....
	function render($request, Throwable $exception)
{
        if ($this->isHttpException($exception)) {
            if ($exception->getStatusCode() == 404) {
                return response()->view('frontend.error.404error', [], 404);
            }
            if ($exception->getStatusCode() == 500) {
                return response()->view('frontend.error.404error', [], 500);
            }
        }
        return parent::render($request, $exception);
    	}
}