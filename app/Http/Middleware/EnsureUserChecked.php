<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use Auth;

class EnsureUserChecked
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            
            if (!Auth::user()->hasVerifiedEmail()) {
                return redirect('https://system.oyatech.co.jp/email/verify');
            }
            
            if (Auth::user()->other == NULL) {
                Auth::logout();
                return redirect()->route('login')->with('error', '現在、ログイン権限が承認されていません');
            }
        }
    
        return $next($request);
    }
}
