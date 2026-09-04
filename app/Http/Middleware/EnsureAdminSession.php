<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsureAdminSession
{
    public const IDLE_SECONDS = 600;

    public function handle(Request $request, Closure $next): Response
    {
        if (! Auth::check()) {
            return redirect()->guest(route('admin.login'));
        }

        $lastActivity = (int) $request->session()->get('admin_last_activity', 0);

        if ($lastActivity && (time() - $lastActivity) > self::IDLE_SECONDS) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()
                ->route('admin.login')
                ->with('status', 'You were signed out after 10 minutes of inactivity.');
        }

        $request->session()->put('admin_last_activity', time());

        return $next($request);
    }
}
