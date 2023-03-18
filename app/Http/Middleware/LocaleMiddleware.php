<?php

namespace App\Http\Controllers;

use Closure;

class LocaleMiddleware {
    public function setLocale($request, Closure $next) {

        return $next($request);
    }
}
