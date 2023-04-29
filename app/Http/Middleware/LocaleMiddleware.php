<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocaleMiddleware {
    public function handle($request, Closure $next)
    {
        if(Session::has('locale'))
            App::setLocale(session('locale'));
        else
            App::setLocale(config('app.locale'));

        return $next($request);
    }
}
