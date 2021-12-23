<?php

namespace App\Http\Middleware;

use Closure;

class CheckSchedule
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $code)
    {
        $action = \App\Action::where('code', $code)->firstOrFail();
        if ($action->actionable->notYet()) {
            return redirect('member')->with('info', 'ID: Belum dimulai, silahkan coba lagi sesuai jadwal. EN: Not started yet, please try again on schedule.');
        }

        if (!$action->hasUser(auth()->user())) {
            return redirect('member')->with('info', 'ID: Anda tidak memiliki hak akses. EN: You do not have access right.');
        }

        return $next($request);
    }
}
