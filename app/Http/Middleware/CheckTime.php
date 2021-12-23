<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;

class CheckTime
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $start, $end)
    {
        $first = Carbon::createFromFormat('Ymd-His', $start);
        $second = Carbon::createFromFormat('Ymd-His', $end);

        if (!Carbon::now()->addHours(7)->between($first, $second)) {
            return redirect('/');
        }

        return $next($request);
    }
}
